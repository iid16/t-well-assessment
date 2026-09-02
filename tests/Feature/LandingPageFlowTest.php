<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageFlowTest extends TestCase
{
    public function test_the_landing_page_shows_guest_navigation_and_auth_choices(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertViewIs('welcome')
            ->assertSee('Beranda')
            ->assertSee('Peneliti')
            ->assertSee('Proses')
            ->assertSee('Tentang')
            ->assertSee('href="'.route('login').'"', false)
            ->assertSee('Login')
            ->assertSee('href="'.route('register').'"', false)
            ->assertSee('Register')
            ->assertDontSee('Lihat Hasil')
            ->assertDontSee('name="assessment_code"', false)
            ->assertDontSee('action="'.route('assessment.show').'"', false);
    }
}
