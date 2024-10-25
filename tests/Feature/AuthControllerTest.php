<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login_with_valid_credentials()
    {
        // Create a user for the test
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password123')
        ]);

        // Simulate a login request
        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'password123'
        ]);

        // Check if the login was successful and a token is returned
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'token'
                 ]);

        // Check if the user is authenticated
        $this->assertAuthenticatedAs($user);

        // Check if the token was created in the database
        $this->assertDatabaseHas('personal_access_tokens', [
            'tokenable_id' => $user->id,
            'tokenable_type' => User::class
        ]);
    }

    public function test_user_cannot_login_with_invalid_credentials()
    {
        // Create a user
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password123')
        ]);

        // Simulate a login attempt with invalid credentials
        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword'
        ]);

        // Check if the response status is 401 Unauthorized
        $response->assertStatus(401)
                 ->assertJson([
                     'message' => 'invalid credentials'
                 ]);

        // Check if the user is not authenticated
        $this->assertGuest();
    }

    public function test_user_can_logout()
    {
        $user = User::factory()->create();
        $token = $user->createToken('Test Token')->plainTextToken;

        // logout req
        $response = $this->postJson('/api/logout', [], [
            'Authorization' => "Bearer $token"
        ]);

        // verify logout
        $response->assertStatus(200)
                 ->assertJson(['message' => 'Logout successful']);

        // verify if token is not valid
        $this->assertCount(0, $user->tokens);
    }

    public function test_user_cannot_logout_without_authentication()
    {
        // try to logout without authentication
        $response = $this->postJson('/api/logout');

        // verify if status is 401 Unauthorized
        $response->assertStatus(401);
    }
}
