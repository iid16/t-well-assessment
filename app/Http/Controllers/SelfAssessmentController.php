<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitAssessmentRequest;
use App\Models\AssessmentSession;
use App\Support\AssessmentInstrument;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use LogicException;

class SelfAssessmentController extends Controller
{
    public function create(Request $request): View
    {
        return view('self-assessment.create', [
            'items' => AssessmentInstrument::items(),
            'likertScale' => AssessmentInstrument::LIKERT_SCALE,
            'submission' => $request->session()->get('self_assessment_submission'),
        ]);
    }

    public function store(SubmitAssessmentRequest $request): RedirectResponse
    {
        $session = DB::transaction(function () use ($request): AssessmentSession {
            $submittedAt = now();

            $session = $request->user()->assessmentSessions()->create([
                'started_at' => $submittedAt,
                'submitted_at' => $submittedAt,
            ]);

            $answers = [];

            foreach ($request->validatedAnswers() as $itemCode => $answerValue) {
                $answers[] = [
                    'item_code' => $itemCode,
                    'answer_value' => $answerValue,
                ];
            }

            $session->answers()->createMany($answers);

            $session->update([
                'assessment_code' => $this->assessmentCodeFor($session),
            ]);

            return $session;
        });

        return redirect()
            ->route('self-assessment.create')
            ->with('self_assessment_submission', [
                'message' => 'Assessment berhasil disimpan.',
                'assessment_code' => $session->assessment_code,
            ]);
    }

    private function assessmentCodeFor(AssessmentSession $session): string
    {
        $code = 'TW-'.strtoupper(base_convert((string) $session->getKey(), 10, 36));

        if (strlen($code) > 20 || $code === 'TW-TEST-001') {
            throw new LogicException('Unable to generate a valid assessment code.');
        }

        return $code;
    }
}
