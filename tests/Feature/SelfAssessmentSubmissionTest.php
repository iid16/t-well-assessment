<?php

namespace Tests\Feature;

use App\Models\AssessmentAnswer;
use App\Models\AssessmentResult;
use App\Models\AssessmentSession;
use App\Models\User;
use App\Support\AssessmentInstrument;
use Illuminate\Foundation\Testing\RefreshDatabase;
use RuntimeException;
use Tests\TestCase;

class SelfAssessmentSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_cannot_access_or_submit_the_self_assessment(): void
    {
        $this->get(route('self-assessment.create'))
            ->assertRedirect(route('login'));

        $this->post(route('self-assessment.store'), [
            'answers' => $this->validAnswers(),
        ])->assertRedirect(route('login'));
    }

    public function test_an_authenticated_user_can_open_the_self_assessment_form_with_all_official_items(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get(route('self-assessment.create'))
            ->assertOk()
            ->assertViewIs('self-assessment.create')
            ->assertViewHas('items', function (array $items): bool {
                return count($items) === 25
                    && $items[0]['code'] === 'X01'
                    && $items[24]['code'] === 'Y212';
            })
            ->assertSee('Kirim Self-Assessment')
            ->assertSee('menit/hari')
            ->assertSee('Sangat Tidak Setuju')
            ->assertSee('action="'.route('self-assessment.store').'"', false)
            ->assertSee('name="_token"', false)
            ->assertSee('type="radio"', false)
            ->assertSee('type="number"', false)
            ->assertDontSee('min="', false)
            ->assertDontSee('max="', false);

        foreach (AssessmentInstrument::items() as $item) {
            $response->assertSee('name="answers['.$item['code'].']"', false);
        }

        $this->assertDatabaseCount('assessment_sessions', 0);
    }

    public function test_a_submission_with_missing_items_is_rejected(): void
    {
        $answers = $this->validAnswers();
        unset($answers['X01']);

        $this->followingRedirects()
            ->actingAs(User::factory()->create())
            ->from(route('self-assessment.create'))
            ->post(route('self-assessment.store'), ['answers' => $answers])
            ->assertOk()
            ->assertSee('Mohon lengkapi semua jawaban yang wajib diisi.');

        $this->assertDatabaseCount('assessment_sessions', 0);
        $this->assertDatabaseCount('assessment_answers', 0);
    }

    public function test_a_submission_with_an_unknown_item_code_is_rejected(): void
    {
        $answers = $this->validAnswers();
        unset($answers['X01']);
        $answers['UNKNOWN'] = 3;

        $this->actingAs(User::factory()->create())
            ->post(route('self-assessment.store'), ['answers' => $answers])
            ->assertSessionHasErrors(['answers', 'answers.X01']);

        $this->assertDatabaseCount('assessment_sessions', 0);
    }

    public function test_likert_values_outside_the_official_scale_are_rejected(): void
    {
        $answers = $this->validAnswers();
        $answers['X01'] = 6;
        $answers['Y212'] = 0;

        $this->actingAs(User::factory()->create())
            ->post(route('self-assessment.store'), ['answers' => $answers])
            ->assertSessionHasErrors(['answers.X01', 'answers.Y212']);

        $this->assertDatabaseCount('assessment_sessions', 0);
    }

    public function test_y1_accepts_minutes_without_an_application_maximum(): void
    {
        $user = User::factory()->create();
        $answers = $this->validAnswers();
        $answers['Y1'] = 999999999;

        $this->actingAs($user)
            ->post(route('self-assessment.store'), ['answers' => $answers])
            ->assertRedirect(route('self-assessment.create'));

        $session = AssessmentSession::sole();

        $this->assertDatabaseHas('assessment_answers', [
            'assessment_session_id' => $session->id,
            'item_code' => 'Y1',
            'answer_value' => 999999999,
        ]);
    }

    public function test_a_valid_submission_creates_one_owned_session_and_25_answers(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post(route('self-assessment.store'), ['answers' => $this->validAnswers()]);

        $session = AssessmentSession::sole();
        $answers = $session->answers()->get();

        $response
            ->assertRedirect(route('self-assessment.create'))
            ->assertSessionHas('self_assessment_submission.message', 'Assessment berhasil disimpan.')
            ->assertSessionHas('self_assessment_submission.assessment_code', $session->assessment_code);

        $this->actingAs($user)
            ->get(route('self-assessment.create'))
            ->assertOk()
            ->assertSee('Assessment berhasil disimpan.')
            ->assertSee('Kode assessment Anda:')
            ->assertSee($session->assessment_code);

        $this->assertSame($user->id, $session->user_id);
        $this->assertNotNull($session->started_at);
        $this->assertNotNull($session->submitted_at);
        $this->assertNotNull($session->assessment_code);
        $this->assertLessThanOrEqual(20, strlen($session->assessment_code));
        $this->assertNotSame('TW-TEST-001', $session->assessment_code);
        $this->assertCount(25, $answers);
        $this->assertSame(25, $answers->pluck('item_code')->unique()->count());
        $this->assertTrue($answers->every(
            fn (AssessmentAnswer $answer): bool => $answer->assessment_session_id === $session->id
        ));
        $this->assertDatabaseCount('assessment_results', 0);
    }

    public function test_dashboard_links_to_the_self_assessment_form(): void
    {
        $this->actingAs(User::factory()->create())
            ->get(route('dashboard'))
            ->assertOk()
            ->assertSee('Mulai Self-Assessment')
            ->assertSee('href="'.route('self-assessment.create').'"', false);
    }

    public function test_assessment_codes_are_unique_for_multiple_submissions(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post(route('self-assessment.store'), [
            'answers' => $this->validAnswers(),
        ]);

        $this->actingAs($user)->post(route('self-assessment.store'), [
            'answers' => $this->validAnswers(),
        ]);

        $codes = AssessmentSession::orderBy('id')->pluck('assessment_code')->all();

        $this->assertCount(2, $codes);
        $this->assertSame($codes, array_values(array_unique($codes)));
    }

    public function test_the_authenticated_user_is_always_the_session_owner(): void
    {
        $user = User::factory()->create();
        $anotherUser = User::factory()->create();

        $this->actingAs($user)
            ->post(route('self-assessment.store'), [
                'user_id' => $anotherUser->id,
                'answers' => $this->validAnswers(),
            ])
            ->assertRedirect(route('self-assessment.create'));

        $this->assertDatabaseHas('assessment_sessions', [
            'user_id' => $user->id,
        ]);
        $this->assertDatabaseMissing('assessment_sessions', [
            'user_id' => $anotherUser->id,
        ]);
    }

    public function test_a_persistence_failure_rolls_back_the_session_and_answers(): void
    {
        $user = User::factory()->create();
        $createdAnswers = 0;

        AssessmentAnswer::creating(function () use (&$createdAnswers): void {
            $createdAnswers++;

            if ($createdAnswers === 2) {
                throw new RuntimeException('Simulated answer persistence failure.');
            }
        });

        try {
            $this->withoutExceptionHandling()
                ->actingAs($user)
                ->post(route('self-assessment.store'), ['answers' => $this->validAnswers()]);

            $this->fail('The simulated persistence failure was not thrown.');
        } catch (RuntimeException $exception) {
            $this->assertSame('Simulated answer persistence failure.', $exception->getMessage());
        } finally {
            AssessmentAnswer::flushEventListeners();
        }

        $this->assertDatabaseCount('assessment_sessions', 0);
        $this->assertDatabaseCount('assessment_answers', 0);
    }

    public function test_a_submission_does_not_change_legacy_results(): void
    {
        $legacy = AssessmentResult::create([
            'assessment_code' => 'TW-TEST-001',
            'screen_time' => 95,
            'x_score' => 78.50,
            'y2_score' => 76.00,
            'x_category' => 'High',
            'y2_category' => 'Good',
            'interpretation' => 'This is a test assessment result. The data shown here is dummy data used only to test the T-Well Assessment system.',
        ]);
        $before = $legacy->only([
            'assessment_session_id',
            'assessment_code',
            'screen_time',
            'x_score',
            'y2_score',
            'x_category',
            'y2_category',
            'interpretation',
        ]);

        $this->actingAs(User::factory()->create())
            ->post(route('self-assessment.store'), ['answers' => $this->validAnswers()])
            ->assertRedirect(route('self-assessment.create'));

        $this->assertSame($before, $legacy->fresh()->only(array_keys($before)));
        $this->assertNull($legacy->fresh()->assessment_session_id);
    }

    /**
     * @return array<string, int>
     */
    private function validAnswers(): array
    {
        $answers = [];

        foreach (AssessmentInstrument::items() as $item) {
            $answers[$item['code']] = $item['response_type'] === 'likert' ? 3 : 120;
        }

        return $answers;
    }
}
