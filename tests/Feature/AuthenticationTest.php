<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create();

        $response = $this->post('/admin/login', [
            'email' => 'admin@gmail.com',
            'password' => '123456',
        ]);


        $response->assertRedirect('/admin');
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $this->post('/admin/login', [
            'email' => 'admin@gmail.com',
            'password' => '1234565',
        ]);

        $this->assertGuest();
    }
}
