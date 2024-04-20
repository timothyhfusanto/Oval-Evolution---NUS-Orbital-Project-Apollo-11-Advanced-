<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\food\t_food;
use App\Models\User;
use App\Model\favourite;
use Illuminate\Support\Facades\Auth;

class FoodTest extends TestCase
{
    use RefreshDatabase;

    public function testFoodItemsAreDisplayedCorrectly()
    {
        // Create some test food items in the database
        $food1 = t_food::create([
            'name' => 'Pizza',
            'price_in_sgd' => 10.99,
            'description' => 'Delicious pizza with cheese and toppings.',
            'image' => 'pizza.jpg',
            'cust_head1' => 'Size',
            'cust_head2' => 'Add',
            'cust_head3' => 'Toppings',
            'cust_head4' => 'Drinks',
            'cust_head5' => 'Style',
            'requirements1' => 1,
            'requirements2' => 2,
            'requirements3' => 3,
            'requirements4' => 4,
            'requirements5' => 5,
            'head1_items' => json_encode(['Item 1', 'Item 2', 'Item 3']),
            'head2_items' => json_encode(['Item 4', 'Item 5', 'Item 6']),
            'head3_items' => json_encode(['Item 7', 'Item 8', 'Item 9']),
            'head4_items' => json_encode(['Item 10', 'Item 11', 'Item 12']),
            'head5_items' => json_encode(['Item 13', 'Item 14', 'Item 15']),
            'head1_price' => json_encode([1,2,3]),
            'head2_price' => json_encode([4,5,6]),
            'head3_price' => json_encode([7,8,9]),
            'head4_price' => json_encode([10,11,12]),
            'head5_price' => json_encode([13,14,15]),     
        ]);

        $food2 = t_food::create([
            'name' => 'Burger',
            'price_in_sgd' => 6.99,
            'description' => 'Juicy burger with lettuce and special sauce.',
            'image' => 'burger.jpg',
            'cust_head1' => 'CustomHead1',
            'cust_head2' => 'CustomHead2',
            'cust_head3' => 'CustomHead3',
            'cust_head4' => 'CustomHead4',
            'cust_head5' => 'CustomHead5',
            'requirements1' => 6,
            'requirements2' => 7,
            'requirements3' => 8,
            'requirements4' => 9,
            'requirements5' => 10,
            'head1_items' => json_encode(['Item 16', 'Item 17', 'Item 18']),
            'head2_items' => json_encode(['Item 19', 'Item 20', 'Item 21']),
            'head3_items' => json_encode(['Item 22', 'Item 23', 'Item 24']),
            'head4_items' => json_encode(['Item 25', 'Item 24', 'Item 27']),
            'head5_items' => json_encode(['Item 28', 'Item 29', 'Item 30']),
            'head1_price' => json_encode([16,17,18]),
            'head2_price' => json_encode([19,20,21]),
            'head3_price' => json_encode([22,23,24]),
            'head4_price' => json_encode([25,26,27]),
            'head5_price' => json_encode([28,29,30]),     
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSee($food1->name);
        $response->assertSee($food2->name);

        $response->assertSee("$" . number_format($food1->price_in_sgd, 2));
        $response->assertSee("$" . number_format($food2->price_in_sgd, 2));

        $response->assertSee($food1->description);
        $response->assertSee($food2->description);

        $response->assertSee($food1->image);
        $response->assertSee($food2->image);

        $response->assertSee(($food1->cust_head1));
        $response->assertSee(($food1->cust_head2));
        $response->assertSee(($food1->cust_head3));
        $response->assertSee(($food1->cust_head4));
        $response->assertSee(($food1->cust_head5));
        $response->assertSee(($food1->requirements1));
        $response->assertSee(($food1->requirements2));
        $response->assertSee(($food1->requirements3));
        $response->assertSee(($food1->requirements4));
        $response->assertSee(($food1->requirements5));
        foreach (json_decode($food1->head1_items) as $item) {
            $response->assertSee($item);
        }        
        foreach (json_decode($food1->head2_items) as $item) {
            $response->assertSee($item);
        } 
        foreach (json_decode($food1->head3_items) as $item) {
            $response->assertSee($item);
        }
        foreach (json_decode($food1->head4_items) as $item) {
            $response->assertSee($item);
        }        
        foreach (json_decode($food1->head5_items) as $item) {
            $response->assertSee($item);
        } 
        foreach (json_decode($food1->head1_price) as $item) {
            $response->assertSee($item);
        }      
        foreach (json_decode($food1->head2_price) as $item) {
            $response->assertSee($item);
        }        
        foreach (json_decode($food1->head3_price) as $item) {
            $response->assertSee($item);
        } 
        foreach (json_decode($food1->head4_price) as $item) {
            $response->assertSee($item);
        }            
        foreach (json_decode($food1->head5_price) as $item) {
            $response->assertSee($item);
        }           
        
        $response->assertSee(($food2->cust_head1));
        $response->assertSee(($food2->cust_head2));
        $response->assertSee(($food2->cust_head3));
        $response->assertSee(($food2->cust_head4));
        $response->assertSee(($food2->cust_head5));
        $response->assertSee(($food2->requirements1));
        $response->assertSee(($food2->requirements2));
        $response->assertSee(($food2->requirements3));
        $response->assertSee(($food2->requirements4));
        $response->assertSee(($food2->requirements5));
        foreach (json_decode($food2->head1_items) as $item) {
            $response->assertSee($item);
        }        
        foreach (json_decode($food2->head2_items) as $item) {
            $response->assertSee($item);
        } 
        foreach (json_decode($food2->head3_items) as $item) {
            $response->assertSee($item);
        }
        foreach (json_decode($food2->head4_items) as $item) {
            $response->assertSee($item);
        }        
        foreach (json_decode($food2->head5_items) as $item) {
            $response->assertSee($item);
        } 
        foreach (json_decode($food2->head1_price) as $item) {
            $response->assertSee($item);
        }      
        foreach (json_decode($food2->head2_price) as $item) {
            $response->assertSee($item);
        }        
        foreach (json_decode($food2->head3_price) as $item) {
            $response->assertSee($item);
        } 
        foreach (json_decode($food2->head4_price) as $item) {
            $response->assertSee($item);
        }            
        foreach (json_decode($food2->head5_price) as $item) {
            $response->assertSee($item);
        }
    }

    public function testFoodCanBeFavouritedAndDisplayedInFavouritesPage()
    {
        // Create a user
        $user = User::factory()->create();

        // Login the user
        Auth::login($user);

        // Create a test food item
        $foodItem = t_food::create([
            'name' => 'Pizza',
            'price_in_sgd' => 10.99,
            'description' => 'Delicious pizza with cheese and toppings.',
            'image' => 'pizza.jpg',
        ]);

        // Make a POST request to the route that handles adding the food item to favourites
        $response = $this->post('/favourites', ['food_id' => $foodItem->id]);

        // Assert that the response has a successful status code
        $response->assertStatus(302);

        // Assert that the food item is successfully added to the favourites
        $this->assertDatabaseHas('favourite', [
            'user_id' => $user->id,
            'food_id' => $foodItem->id,
        ]);

        // Make a GET request to the '/favourite' route that displays favourite items
        $response = $this->get('/favourites');

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Assert that the food item information is displayed on the '/favourite' page
        $response->assertSee($foodItem->name);
        $response->assertSee($foodItem->price_in_sgd);
        $response->assertSee($foodItem->description);
        $response->assertSee($foodItem->image);
    }
}
