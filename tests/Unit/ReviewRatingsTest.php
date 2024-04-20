<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\ReviewRatings;
use App\Models\User;
use App\Models\t_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ReviewRatingsTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreMethodWithHasOrder()
    {
        // Create a test user
        $user = User::factory()->create();

        // Simulate authentication of the test user
        $this->actingAs($user);

        // Create a test order item with a food_id
        $foodId = 123; // Replace with your desired food_id
        $orderItem = t_order::create([
            'user_id' => $user->id,
            'payment_mode' => 'Cash',
        ]);
        $orderItem->orderitems()->create([
            'food_id' => $foodId,
        ]);

        // Create a test request with food_id and rating
        $request = new Request([
            'food_id' => $foodId,
            'rating' => 4,
            // Add other required fields for the request as needed
        ]);

        // Create an instance of the ReviewRatingsController
        $controller = new ReviewRatings();

        // Call the store method with the test request
        $response = $controller->store($request);

        // Assert that the response is a redirect
        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertEquals(302, $response->getStatusCode());

        // Assert that the session has the addreview message
        $this->assertTrue(Session::has('addreview'));
    }

    public function testStoreMethodWithNoOrder()
    {
        // Create a test user
        $user = User::factory()->create();

        // Simulate authentication of the test user
        $this->actingAs($user);

        // Create a test request without a food_id
        $request = new Request([
            // Add other required fields for the request as needed
        ]);

        // Create an instance of the ReviewRatingsController
        $controller = new ReviewRatings();

        // Call the store method with the test request
        $response = $controller->store($request);

        // Assert that the response is a redirect
        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertEquals(302, $response->getStatusCode());

        // Assert that the session has the neverOrder message
        $this->assertNotNull(session('neverOrder'));
    }
}
