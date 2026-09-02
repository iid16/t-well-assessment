<?php

namespace Tests\Feature;

use Tests\TestCase;

class PasswordToggleTest extends TestCase
{
    public function test_login_password_field_has_a_keyboard_accessible_toggle(): void
    {
        $this->get(route('login'))
            ->assertOk()
            ->assertSee('id="password"', false)
            ->assertSee('type="password"', false)
            ->assertSee('data-password-toggle', false)
            ->assertSee('aria-controls="password"', false)
            ->assertSee('aria-label="Tampilkan password"', false)
            ->assertSee('type="button"', false);
    }

    public function test_register_password_and_confirmation_fields_have_toggles(): void
    {
        $this->get(route('register'))
            ->assertOk()
            ->assertSee('id="password"', false)
            ->assertSee('id="password_confirmation"', false)
            ->assertSee('aria-controls="password"', false)
            ->assertSee('aria-controls="password_confirmation"', false)
            ->assertSee('data-password-toggle', false)
            ->assertSee('aria-label="Tampilkan password"', false);
    }
}
