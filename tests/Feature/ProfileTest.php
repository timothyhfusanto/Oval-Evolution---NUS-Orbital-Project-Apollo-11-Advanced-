<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\User;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function testProfileIndexShowsLoggedInUser()
    {
        // Create a user
        $user = User::factory()->create();

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the GET request to the /profile endpoint
        $response = $this->get('/profile');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct view name
        $response->assertViewIs('customer.profile.index');

        // Access the 'user' variable from the view's data
        $viewUser = $response->viewData('user');

        // Assert that the 'user' variable is the same as the logged-in user
        $this->assertEquals($user->id, $viewUser->id);
    }

    public function testProfileIndexRedirectsIfNotLoggedIn()
    {
        // Make the GET request to the /profile endpoint without being logged in
        $response = $this->get('/profile');

        // Assert that the response is a redirect (since the user is not logged in)
        $response->assertRedirect('/login');
    }

    public function testUpdateProfileWithValidData()
    {
        // Create a user
        $user = User::factory()->create();

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the PATCH request to the /profile endpoint with valid data
        $response = $this->patch('/profile', [
            'name' => 'John Doe',
        ]);

        // Assert that the response is a redirect
        $response->assertRedirect();

        // Assert that the session has the correct flash message
        $this->assertEquals('Profile updated successfully', session('status'));

        // Refresh the user instance from the database
        $user->refresh();

        // Assert that the user's name is updated
        $this->assertEquals('John Doe', $user->name);
    }

    public function testUpdateProfileWithImage()
    {
        // Create a user
        $user = User::factory()->create();

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Create a dummy image file
        $image = UploadedFile::fake()->image('profile.jpg');

        // Make the PATCH request to the /profile endpoint with an image
        $response = $this->patch('/profile', [
            'name' => 'John Doe',
            'image' => $image,
        ]);

        // Assert that the response is a redirect
        $response->assertRedirect();

        // Assert that the session has the correct flash message
        $this->assertEquals('Profile updated successfully', session('status'));

        // Refresh the user instance from the database
        $user->refresh();

        // Assert that the user's name is updated
        $this->assertEquals('John Doe', $user->name);

        // Assert that the user's profile_image field is updated
        $this->assertNotNull($user->profile_image);

        // Assert that the image exists in the storage
        Storage::assertExists($user->profile_image);
    }

    public function testDeleteProfile()
    {
        // Create a user
        $user = User::factory()->create();

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the DELETE request to the /profile endpoint
        $response = $this->delete('/profile');

        // Assert that the response is a redirect
        $response->assertRedirect('/');

        // Assert that the session has the correct flash message
        $this->assertEquals('Account deleted', session('delAcc'));

        // Assert that the user is deleted from the database
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}

