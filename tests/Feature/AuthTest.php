<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    public function test_user_registration()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'Secret123',
            'password_confirmation' => 'Secret123',
        ];

        $response = $this->post('/register', $userData);
        $response->assertStatus(302);
        $response->assertRedirect('/');

        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);
    }
    
    public function test_user_login()
    {
        // Create a user for login
        $user = User::factory()->create([
            'email' => 'john@example.com',
            'password' => bcrypt('Secret123'),
        ]);

        $response = $this->post('/login', [
            'email' => 'john@example.com',
            'password' => 'Secret123',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/');

        $this->assertAuthenticatedAs($user);
    }

    public function test_user_registration_with_missing_required_field()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => '', 
            'password' => 'password', 
            'password_confirmation' => 'password', 
        ]);
        $this->assertDatabaseCount('users', 0);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('email');
    }

    public function test_user_login_error_with_wrong_password()
    {
        $user = User::factory()->create([
            'email' => 'john@example.com',
            'password' => bcrypt('Secret123'),
        ]);

        $response = $this->post('/login', [
            'email' => 'john@example.com',
            'password' => 'wrong_password', 
        ]);

        $response->assertStatus(302);

        $response->assertRedirect();

        $response->assertSessionHasErrors('password');
    }

    public function test_user_login_errors_with_unregistered_email()
    {
        $user = User::factory()->create([
            'email' => 'john@example.com',
            'password' => bcrypt('Secret123'),
        ]);

        $response = $this->post('/login', [
            'email' => 'unregistered_email@example.com',
            'password' => 'Secret123', 
        ]);

        $response->assertStatus(302);

        $response->assertRedirect();

        $response->assertSessionHasErrors('email');
    }
}
