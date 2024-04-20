<?php
namespace Tests\Feature;

use App\Models\drink\t_drink;
use App\Models\orderitems;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\t_order;
use App\Models\reviewrating;
use App\Models\food\t_food;

class ReviewRatingTest extends TestCase
{
    use RefreshDatabase;

    public function testFoodReviewIsCreatedWithExistingOrder()
    {
        // Seed the test database with an order for the user and some test data
        $user = User::factory()->create();
        $this->actingAs($user);

        // Create an instance of t_order with required data
        $order = new t_order([
            'user_id' => $user->id,
            'payment_mode' => 'Cash',
            // Add other required data as necessary
        ]);
        $order->save();

        $items = new orderitems([
            'order_id' => $order->id,
            'food_id' => 1,
        ]);
        $items->save();

        // Make a POST request to the store method with review data
        $response = $this->post('/review', [
            'food_id' => 1,
            'drink_id' => null,
            'comment' => 'This is a great menu!',
            'rating' => 5,
        ]);

        // Assert that the review is created in the database
        $this->assertDatabaseHas('reviewrating', [
            'user_id' => $user->id,
            'user_name' => $user->name,
            'food_id' => 1,
            'comments' => 'This is a great menu!',
            'star_rating' => 5,
        ]);

        // Assert that the user is redirected back and sees the success message
        $response->assertRedirect();
        $response->assertSessionHas('addreview', "Thank you for leaving your review");
    }

    public function testFoodReviewIsNotCreatedWithoutExistingOrder()
    {
        // Create a user and log in
        $user = User::factory()->create();
        $this->actingAs($user);

        // Make a POST request to the store method with review data for a non-existing order
        $response = $this->post('/review', [
            'food_id' => 1, // Replace with a valid food ID that doesn't match any order
            'drink_id' => null,
            'comment' => 'This is a great menu!',
            'rating' => 5,
        ]);

        $order = new t_order([
            'user_id' => 123,
            'payment_mode' => 'Cash',
            // Add other required data as necessary
        ]);

        $order->save();
        $items = new orderitems([
            'order_id' => $order->id,
            'food_id' => 1,
        ]);
        $items->save();

        // Assert that the review is not created in the database
        $this->assertDatabaseMissing('reviewrating', [
            'user_id' => $user->id,
            'user_name' => $user->name,
            'comments' => 'This is a great menu!',
            'star_rating' => 5,
        ]);

        // Assert that the user is redirected back and sees the error message
        $response->assertRedirect();
        $response->assertSessionHas('neverOrder', "You need to purchase this menu before leaving a review");
    }

    public function testDrinkReviewIsCreatedWithExistingOrder()
    {
        // Create a user and log in
        $user = User::factory()->create();
        $this->actingAs($user);        

        // Create an instance of t_order with required data
        $order = new t_order([
            'user_id' => $user->id,
            'payment_mode' => 'Cash',
            // Add other required data as necessary
        ]);
        $order->save();

        $items = new orderitems([
            'order_id' => $order->id,
            'drink_id' => 1,
        ]);
        $items->save();

        // Make a POST request to the store method with review data
        $response = $this->post('/review', [
            'food_id' => null,
            'drink_id' => 1,
            'comment' => 'This is a great menu!',
            'rating' => 5,
        ]);

        // Assert that the review is created in the database
        $this->assertDatabaseHas('reviewrating', [
            'user_id' => $user->id,
            'user_name' => $user->name,
            'drink_id' => 1,
            'comments' => 'This is a great menu!',
            'star_rating' => 5,
        ]);

        // Assert that the user is redirected back and sees the success message
        $response->assertRedirect();
        $response->assertSessionHas('addreview', "Thank you for leaving your review");
    }

    public function testDrinkReviewIsNotCreatedWithoutExistingOrder()
    {
        // Create a user and log in
        $user = User::factory()->create();
        $this->actingAs($user);

        // Make a POST request to the store method with review data for a non-existing order
        $response = $this->post('/review', [
            'food_id' => null, // Replace with a valid food ID that doesn't match any order
            'drink_id' => 1,
            'comment' => 'This is a great menu!',
            'rating' => 5,
        ]);

        $order = new t_order([
            'user_id' => 123,
            'payment_mode' => 'Cash',
            // Add other required data as necessary
        ]);

        $order->save();
        $items = new orderitems([
            'order_id' => $order->id,
            'drink_id' => 1,
        ]);
        $items->save();

        // Assert that the review is not created in the database
        $this->assertDatabaseMissing('reviewrating', [
            'user_id' => $user->id,
            'user_name' => $user->name,
            'comments' => 'This is a great menu!',
            'star_rating' => 5,
        ]);

        // Assert that the user is redirected back and sees the error message
        $response->assertRedirect();
        $response->assertSessionHas('neverOrder', "You need to purchase this menu before leaving a review");
    }

    public function testFoodShowMethod()
    {
        // Create some test data for t_food and reviewrating models
        $food = new t_food([
            'name' => 'Test Food',
            'price_in_sgd' => '3.5',
            'description' => 'test',
            //rest of the details
        ]);
        $food->save();        
        $reviewratings = [
            new reviewrating([
                'food_id' => $food->id,
                'star_rating' => 5,
            ]),
            new reviewrating([
                'food_id' => $food->id,
                'star_rating' => 4,
            ]),
        ];

        foreach ($reviewratings as $reviewrating) {
            $reviewrating->save();
        }
        // Make a GET request to the show method with the food_id
        $response = $this->get('/review/' . $food->id);

        // Assert that the response has a successful status code (200)
        $response->assertStatus(200);

        // Assert that the required data is available in the view
        $response->assertViewHasAll([
            'datashow',
            'food',
            'countRev',
            'averageRate',
            'fiveStar',
            'fourStar',
            'threeStar',
            'twoStar',
            'oneStar',
        ]);
    }

    public function testDrinkShowMethod()
    {
        $drink = new t_drink([
            'name' => 'Test Drink',
            'price_in_sgd' => '3.5',
            'description' => 'test',
            //rest of the details
        ]);
        $drink->save();        
        $reviewratings = [
            new reviewrating([
                'drink_id' => $drink->id,
                'star_rating' => 5,
            ]),
            new reviewrating([
                'drink_id' => $drink->id,
                'star_rating' => 4,
            ]),
        ];

        foreach ($reviewratings as $reviewrating) {
            $reviewrating->save();
        }
        // Make a GET request to the show method with the food_id
        $response = $this->get('/drinkreview/' . $drink->id);

        // Assert that the response has a successful status code (200)
        $response->assertStatus(200);

        // Assert that the required data is available in the view
        $response->assertViewHasAll([
            'datashow',
            'drink',
            'countRev',
            'averageRate',
            'fiveStar',
            'fourStar',
            'threeStar',
            'twoStar',
            'oneStar',
        ]);
    }

    public function testFoodUpdateMethod()
    {
        // Manually insert a test user into the database
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Manually insert a test food instance into the database
        $food = t_food::create([
            'name' => 'Test Food',
            // Add other required fields here...
        ]);

        // Manually insert a test reviewrating instance into the database
        $reviewrating = reviewrating::create([
            'food_id' => $food->id,
            'user_id' => $user->id,
            'star_rating' => 0,
        ]);
        $this->actingAs($user);
        // Make a PATCH request to the update method with the food_id and user_id
        $response = $this->patch(route('review.update', ['id' => $food->id, 'user_id' => $user->id]), [
            'user_profile' => 'new_profile_value',
            'rating' => 4,
            'comment' => 'Updated comment',
        ]);

        // Assert that the response is a redirect
        $response->assertRedirect(route('review.show', ['id' => $food->id]));

        // Assert that the session has the update message
        $this->assertEquals('Your review has been updated', session('update'));

        // Assert that the reviewrating instance has been updated in the database
        $updatedReviewRating = reviewrating::where('food_id', $food->id)
            ->where('user_id', $user->id)
            ->first();
        $this->assertEquals('new_profile_value', $updatedReviewRating->user_profile);
        $this->assertEquals(4, $updatedReviewRating->star_rating);
        $this->assertEquals('Updated comment', $updatedReviewRating->comments);
    }

    public function testFoodEditMethod()
    {
        // Create a test user
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Manually insert a test food instance into the database
        $food = t_food::create([
            'name' => 'Test Food',
            // Add other required fields here...
        ]);

        // Manually insert a test reviewrating instance into the database
        $reviewrating = reviewrating::create([
            'food_id' => $food->id,
            'user_id' => $user->id,
            'star_rating' => 0,
        ]);
        $this->actingAs($user);

        // Make a GET request to the edit method with the food_id and user_id
        $response = $this->get(route('review.edit', ['id' => $food->id, 'user_id' => $user->id]));

        // Assert that the response has a successful status code (200)
        $response->assertStatus(200);

        // Assert that the required data is available in the view
        $response->assertViewHasAll([
            'dataedit',
            'food',
        ]);
    }

    public function testDrinkUpdateMethod()
    {
        // Manually insert a test user into the database
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Manually insert a test food instance into the database
        $drink = t_drink::create([
            'name' => 'Test Drink',
            // Add other required fields here...
        ]);

        // Manually insert a test reviewrating instance into the database
        $reviewrating = reviewrating::create([
            'drink_id' => $drink->id,
            'user_id' => $user->id,
            'star_rating' => 0,
        ]);
        $this->actingAs($user);
        // Make a PATCH request to the update method with the food_id and user_id
        $response = $this->patch(route('drinkreview.update', ['id' => $drink->id, 'user_id' => $user->id]), [
            'user_profile' => 'new_profile_value',
            'rating' => 2,
            'comment' => 'Updated comment',
        ]);

        // Assert that the response is a redirect
        $response->assertRedirect(route('drinkreview.show', ['id' => $drink->id]));

        // Assert that the session has the update message
        $this->assertEquals('Your review has been updated', session('update'));

        // Assert that the reviewrating instance has been updated in the database
        $updatedReviewRating = reviewrating::where('drink_id', $drink->id)
            ->where('user_id', $user->id)
            ->first();
        $this->assertEquals('new_profile_value', $updatedReviewRating->user_profile);
        $this->assertEquals(2, $updatedReviewRating->star_rating);
        $this->assertEquals('Updated comment', $updatedReviewRating->comments);
    }

    public function testDrikEditMethod()
    {
        // Create a test user
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Manually insert a test food instance into the database
        $drink = t_drink::create([
            'name' => 'Test drink',
            // Add other required fields here...
        ]);

        // Manually insert a test reviewrating instance into the database
        $reviewrating = reviewrating::create([
            'drink_id' => $drink->id,
            'user_id' => $user->id,
            'star_rating' => 0,
        ]);
        $this->actingAs($user);

        // Make a GET request to the edit method with the drink_id and user_id
        $response = $this->get(route('drinkreview.edit', ['id' => $drink->id, 'user_id' => $user->id]));

        // Assert that the response has a successful status code (200)
        $response->assertStatus(200);

        // Assert that the required data is available in the view
        $response->assertViewHasAll([
            'dataedit',
            'drink',
        ]);
    }
    public function testFoodDeleteMethod()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
        // Create a test food instance and save it to the database
        $food = t_food::create([
            'name' => 'Test Food',
            // Add other required fields here...
        ]);

        // Create a test reviewrating instance and save it to the database
        $reviewrating = reviewrating::create([
            'food_id' => $food->id,
            'user_id' => $user->id,
            'star_rating' => 0,
        ]);
        $this->actingAs($user);
        // Make a DELETE request to the delete method with the food_id and user_id
        $response = $this->delete(route('review.delete', ['id' => $food->id, 'user_id' => $reviewrating->user_id]));

        // Assert that the response is a redirect
        $response->assertRedirect(route('review.show', ['id' => $food->id]));

        // Assert that the session has the delete message
        $this->assertEquals('Your review has been deleted', session('delete'));

        // Assert that the reviewrating instance has been deleted from the database
        $deletedReviewRating = reviewrating::where('food_id', $food->id)
            ->where('user_id', $reviewrating->user_id)
            ->first();
        $this->assertNull($deletedReviewRating);
    }

    public function testDrinkDeleteMethod()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
        // Create a test food instance and save it to the database
        $drink = t_drink::create([
            'name' => 'Test drink',
            // Add other required fields here...
        ]);

        // Create a test reviewrating instance and save it to the database
        $reviewrating = reviewrating::create([
            'drink_id' => $drink->id,
            'user_id' => $user->id,
            'star_rating' => 0,
        ]);
        $this->actingAs($user);
        // Make a DELETE request to the delete method with the drink_id and user_id
        $response = $this->delete(route('drinkreview.delete', ['id' => $drink->id, 'user_id' => $reviewrating->user_id]));

        // Assert that the response is a redirect
        $response->assertRedirect(route('drinkreview.show', ['id' => $drink->id]));

        // Assert that the session has the delete message
        $this->assertEquals('Your review has been deleted', session('delete'));

        // Assert that the reviewrating instance has been deleted from the database
        $deletedReviewRating = reviewrating::where('drink_id', $drink->id)
            ->where('user_id', $reviewrating->user_id)
            ->first();
        $this->assertNull($deletedReviewRating);
    }
}
