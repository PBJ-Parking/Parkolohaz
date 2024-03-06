<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_users_can_register(): void
    {

// átírva adatbázis szerkezet szerint
        $response = $this->post('/register', [
            'name' => 'Test User',
            'telefonszam' => '+36 55 820 8816',
            'cim' => '2347 Ács Dobó tér 2.',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'megrendelo_tipus' =>'M',
            'adoszam' => '1645737956972',
            'admin_e' =>'0'
        ]);

        $this->assertAuthenticated();
        $response->assertNoContent();
    }
}
