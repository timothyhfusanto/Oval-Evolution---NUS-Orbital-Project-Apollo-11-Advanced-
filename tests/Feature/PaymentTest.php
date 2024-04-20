<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\t_order;
use App\Models\t_cart;
use App\Models\User;

class PaymentTest extends TestCase
{
    use RefreshDatabase;

    public function testOrderCreationWithCashPayment()
    {
        // Simulate a logged-in user (you may need to customize this for your authentication method)
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create sample data for the request
        $request = [
            'payment' => 'Cash',
            'payment_id' => '12345',
            'total_price' => 100,
        ];

        // Send the request to the store method
        $response = $this->post('/staff/order/on-going', $request);

        // Assert that the order was created successfully
        $response->assertStatus(302); // or whatever status code your JSON response returns
        $this->assertDatabaseHas('t_order', [
            'user_id' => $user->id,
            'payment_mode' => 'Cash',
            'payment_id' => '12345',
            'total_price' => 100,
            'del_stat' => '1',
        ]);

        // Assert that cart items are copied to order items
        $this->assertCount(0, t_cart::where('user_id', $user->id)->get());
        $order = t_order::where('user_id', $user->id)->first();
    }
    public function testOrderCreationWithPaypalPayment()
    {
        // Simulate a logged-in user (you may need to customize this for your authentication method)
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create sample data for the request
        $request = [
            'payment' => 'Paypal',
            'payment_id' => '67890',
            'total_price' => 150,
        ];

        // Send the request to the store method
        $response = $this->post('/staff/order/on-going', $request);

        // Assert that the order was created successfully
        $response->assertStatus(302); // or whatever status code your JSON response returns
        $this->assertDatabaseHas('t_order', [
            'user_id' => $user->id,
            'payment_mode' => 'Paypal',
            'payment_id' => '67890',
            'total_price' => 150,
            'del_stat' => '1',
        ]);

        // Assert that cart items are copied to order items
        $this->assertCount(0, t_cart::where('user_id', $user->id)->get());
        $order = t_order::where('user_id', $user->id)->first();
    }
}
