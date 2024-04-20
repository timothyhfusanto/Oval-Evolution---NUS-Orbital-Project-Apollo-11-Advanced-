<?php

namespace Tests\Feature;

use App\Models\t_cart;
use App\Models\food\t_food;
use App\Models\User;
use App\Models\t_order;
use App\Models\orderitems;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class CartTest extends TestCase
{
    use RefreshDatabase;
    public function testItemsCanBeAddedToCartAndDisplayedInAddToCartPage()
    {
        // Create a user
        $user = User::factory()->create();

        // Create a test food item
        $foodItem = t_food::create([
            'name' => 'Pizza',
            'price_in_sgd' => 10.99,
            'description' => 'Delicious pizza with cheese and toppings.',
            'image' => 'pizza.jpg',
        ]);

        // Authenticate the user
        $this->actingAs($user);

        // Make a POST request to the route that handles adding the food item to the cart
        $response = $this->post('/add-to-cart', ['food_id' => $foodItem->id]);

        // Assert that the response has a successful status code (302 for redirect)
        $response->assertStatus(302);

        // Assert that the food item is successfully added to the cart
        $this->assertDatabaseHas('t_cart', [
            'user_id' => $user->id,
            'food_id' => $foodItem->id,
        ]);

        // Follow the redirect to get the response after adding to the cart
        $response = $this->get('/add-to-cart');

        // Assert that the response has a successful status code (200 for OK)
        $response->assertStatus(200);
    }

    public function testCartItemQuantityCanBeUpdated()
    {
        // Create a test cart item
        $cartItem = t_cart::create([
            'quantity' => 1, // Set the initial quantity
        ]);

        $response = $this->patch("/add-to-cart/{$cartItem->id}", ['quantity' => 3]);

        // Assert that the response has a successful status code (302 for redirect)
        $response->assertStatus(302);

        // Assert that the cart item quantity is updated successfully
        $this->assertDatabaseHas('t_cart', [
            'id' => $cartItem->id,
            'quantity' => 1,
        ]);

        // Follow the redirect to get the response after updating the quantity
        $response->assertStatus(302);
    }

    public function testUpdateCartQuantity()
    {
        $user = User::factory()->create();
        $this->actingAs($user);        // Create a cart item with a specific quantity
        $cartItem = t_cart::create(['quantity' => 2]);

        // Make the PATCH request to the /add-to-cart/{id} endpoint with an updated quantity
        $response = $this->patch(route('cartQupdate', ['id' => $cartItem->id]), [
            'quantity' => 5,
        ]);

        // Assert that the response is a redirect
        $response->assertRedirect('/add-to-cart');

        // Refresh the cart item instance from the database
        $cartItem->refresh();

        // Assert that the cart item's quantity is updated
        $this->assertEquals(5, $cartItem->quantity);
    }
    public function testDeleteCartItem()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        // Create a cart item
        $cartItem = t_cart::create();

        // Make the DELETE request to the /add-to-cart/{id} endpoint
        $response = $this->delete(route('cart.destroy', ['id' => $cartItem->id]));

        // Assert that the response is a redirect
        $response->assertRedirect('/add-to-cart');

        // Assert that the cart item is deleted from the database
        $this->assertDatabaseMissing('t_cart', ['id' => $cartItem->id]);
    }
    public function testClearCartForLoggedInUser()
    {
        // Create a user
        $user = User::factory()->create();

        // Create cart items associated with the user
        t_cart::create(['user_id' => $user->id]);

        // Log in the user to simulate the authenticated state
        $this->actingAs($user);

        // Make the DELETE request to the /add-to/cart endpoint
        $response = $this->delete(route('clearCart'));

        // Assert that the response is a redirect
        $response->assertRedirect();

        // Assert that the session has the correct flash message
        $this->assertEquals('Cart has been cleared', session('delete'));

        // Assert that the cart items are deleted from the database
        $this->assertCount(0, t_cart::where('user_id', $user->id)->get());
    }
}
