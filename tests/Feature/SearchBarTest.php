<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\food\t_food;
use App\Models\drink\t_drink;

class SearchBarTest extends TestCase
{
    use RefreshDatabase;

    public function testFoodListAjaxReturnsCorrectData()
    {
        // Create test data in the database
        t_food::create(['name' => 'Food 1', 'del_stat' => 1]);
        t_food::create(['name' => 'Food 2', 'del_stat' => 1]);
        t_food::create(['name' => 'Food 3', 'del_stat' => 0]); // Should not be included

        // Make the GET request to the food-list endpoint
        $response = $this->get('/food-list');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct data
        $response->assertExactJson(['Food 1', 'Food 2']);
    }

    public function testDrinkListAjaxReturnsCorrectData()
    {
        // Create test data in the database
        t_drink::create(['name' => 'Drink 1', 'del_stat' => 1]);
        t_drink::create(['name' => 'Drink 2', 'del_stat' => 1]);
        t_drink::create(['name' => 'Drink 3', 'del_stat' => 0]); // Should not be included

        // Make the GET request to the food-list endpoint
        $response = $this->get('/drink-list');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct data
        $response->assertExactJson(['Drink 1', 'Drink 2']);
    }

    public function testSearchIndexRedirectsBackIfProductNotFound()
    {
        // Make the GET request to the searched-food endpoint with a non-existent product
        $response = $this->get('/searched-food?product_name=NonExistentProduct');

        // Assert that the response is a redirect back
        $response->assertRedirect();
        
        // Assert that the response contains the correct session data
        $response->assertSessionHas('searchNotFound', 'NonExistentProduct not found');
    }

    public function testSearchIndexFoodReturnsViewWithCorrectDataIfProductFound()
    {
        // Create test data in the database
        t_food::create(['name' => 'Food 1']);
        t_food::create(['name' => 'Food 2']);

        // Make the GET request to the searched-food endpoint with a product that exists in the database
        $response = $this->get('/searched-food?product_name=Food');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct view name
        $response->assertViewIs('customer.food.foodsearch');

        // Assert that the view contains the correct data
        $response->assertViewHas('product');
    }
    public function testSearchIndexDrinkReturnsViewWithCorrectDataIfProductFound()
    {
        // Create test data in the database
        t_drink::create(['name' => 'Drink 1']);
        t_drink::create(['name' => 'Drink 2']);

        // Make the GET request to the searched-food endpoint with a product that exists in the database
        $response = $this->get('/searched-drink?product_name=Drink');

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the response contains the correct view name
        $response->assertViewIs('customer.drink.drinksearch');

        // Assert that the view contains the correct data
        $response->assertViewHas('product');
    }
}


