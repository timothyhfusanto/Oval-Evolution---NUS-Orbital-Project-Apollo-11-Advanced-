<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\t_order;
use App\Http\Controllers\OrderController;


class OrderTest extends TestCase
{
    use RefreshDatabase;

    public function testQueueIsResetToZero()
    {
        // Seed the test database with sample data
        $queue1 = t_order::create([
            'queue' => 5,
            'payment_mode' => 'Cash',
            'payment_id' => '100',
        ]);

        // Create an instance of OrderController
        $controller = new OrderController();

        // Call the resetQueue function
        $response = $controller->resetQueue();

        // Assert that the 'queue_reset' session data is set to true
        $this->assertTrue(session('queue_reset'));

        // Create a new order after the resetQueue is called
        $queue2 = t_order::create([
            'payment_mode' => 'Cash',
            'payment_id' => '200',
        ]);

        // Assert that the session has the status message
        $this->assertEquals('Queue has been reset successfully', session('status'));

        // Assert that the new order's 'queue' value is 1
        $this->assertEquals(0, $queue2->queue);
    }

    public function testClearHistory()
    {
        $user = User::factory()->create();
        t_order::create([
            'user_id' => $user->id,
            'payment_mode' => 'Paypal',
        ]);

        // Ensure the orders have 'del_stat' set to 1
        $this->assertEquals(1, t_order::where('user_id', $user->id)->where('del_stat', 1)->count());

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the POST request to the /myorders/all-order endpoint to clear the history
        $response = $this->post('/myorders/all-order');

        // Assert that the response is a redirect back
        $response->assertRedirect();

        // Assert that the orders have 'del_stat' set to 0 after clearing the history
        $this->assertEquals(0, t_order::where('user_id', $user->id)->where('del_stat', 1)->count());

        // Assert that the response contains the correct session data
        $response->assertSessionHas('success', 'Order history has been cleared');
    }

    public function testViewOrderShowsOrderIfAuthorized()
    {
        // Create a user and an order associated with the user
        $user = User::factory()->create();
        $order = t_order::create(['user_id' => $user->id, 'payment_mode' => "Paypal"]);

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the GET request to the /view-order/{id} endpoint
        $response = $this->get('/view-order/' . $order->id);

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct view name
        $response->assertViewIs('customer.order.view');

        // Assert that the view contains the correct data (order variable)
        $response->assertViewHas('order', $order);
    }

    public function testIndexShowsUserOrdersWithDelStatOne()
    {
        // Create a user and two orders associated with the user (one with del_stat = 1, and one with del_stat = 0)
        $user = User::factory()->create();
        t_order::create(['user_id' => $user->id, 'payment_mode' => "Paypal", 'del_stat' => 1]);
        t_order::create(['user_id' => $user->id, 'payment_mode' => "Paypal", 'del_stat' => 0]);

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the GET request to the /myorders/all-order endpoint
        $response = $this->get('/myorders/all-order');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct view name
        $response->assertViewIs('customer.order.index');

        // Access the 'orders' variable from the view's data
        $orders = $response->viewData('orders');

        // Assert that the 'orders' variable is a collection
        $this->assertInstanceOf(\Illuminate\Support\Collection::class, $orders);

        // Assert that the collection only contains orders with del_stat = 1
        foreach ($orders as $order) {
            $this->assertEquals(1, $order->del_stat);
        }
    }

    public function testViewCompletedOrders()
    {
        // Create a user and two orders associated with the user (one with del_stat = 1, and one with del_stat = 0)
        $user = User::factory()->create();
        t_order::create(['user_id' => $user->id, 'payment_mode' => "Paypal", 'del_stat' => 1]);
        t_order::create(['user_id' => $user->id, 'payment_mode' => "Paypal", 'del_stat' => 0]);

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the GET request to the /myorders/all-order endpoint
        $response = $this->get('/myorders/completed');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct view name
        $response->assertViewIs('customer.order.completed');

        // Access the 'orders' variable from the view's data
        $orders = $response->viewData('orders');

        // Assert that the 'orders' variable is a collection
        $this->assertInstanceOf(\Illuminate\Support\Collection::class, $orders);

        // Assert that the collection only contains orders with del_stat = 1
        foreach ($orders as $order) {
            $this->assertEquals(1, $order->del_stat);
            $this->assertEquals('Completed', $order->status);
        }
    }

    public function testViewOngoingOrders()
    {
        // Create a user and two orders associated with the user (one with del_stat = 1, and one with del_stat = 0)
        $user = User::factory()->create();
        t_order::create(['user_id' => $user->id, 'payment_mode' => "Paypal", 'del_stat' => 1]);
        t_order::create(['user_id' => $user->id, 'payment_mode' => "Paypal", 'del_stat' => 0]);

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the GET request to the /myorders/all-order endpoint
        $response = $this->get('/myorders/on-going');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct view name
        $response->assertViewIs('customer.order.on-going');

        // Access the 'orders' variable from the view's data
        $orders = $response->viewData('orders');

        // Assert that the 'orders' variable is a collection
        $this->assertInstanceOf(\Illuminate\Support\Collection::class, $orders);

        // Assert that the collection only contains orders with del_stat = 1
        foreach ($orders as $order) {
            $this->assertEquals(1, $order->del_stat);
            $this->assertEquals('Pending', $order->status);
        }
    }
}


