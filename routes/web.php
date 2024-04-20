<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\Auth\StaffLoginController;
use App\Http\Controllers\Auth\StaffRegisterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReviewRatings;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\UserController;
use App\Models\food\t_food;
use App\Models\drink\t_drink;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(WelcomeController::class)->group(function(){
	route::get('/','index')->name('welcome.show');
});

Route::get('/drinks', function () {
	$dataindex = t_drink::where('del_stat', 1)->get();
    return view('customer/drink/drinks', compact('dataindex'));
});

Route::get('/offers', function () {
    return view('customer/offer');
});

Route::get('/about-us', function () {
    return view('customer/about-us');
});

Route::get('/login-option', function () {
    return view('LoginRegistration/login-option');
});

Route::get('/register-option', function () {
    return view('LoginRegistration/register-option');
});

Route::get('/input-password', function () {
	return view('LoginRegistration/staffpw');
});

Route::get('food-list', [CustomerController::class, 'foodListAjax']);
Route::get('drink-list', [CustomerController::class, 'drinkListAjax']);
Route::get('searched-food', [CustomerController::class, 'searchIndex'])->name('searched.index');
Route::get('searched-drink', [CustomerController::class, 'searchDrink'])->name('drinksearched.index');


Route::get('/staff/register', function () {
    return view('staff-register');
});

route::get('/review/{id}',[ReviewRatings::class, 'show'])->name('review.show');
route::get('/drinkreview/{id}',[ReviewRatings::class, 'drinkshow'])->name('drinkreview.show');


route::get('/drinkreview/{id}',[ReviewRatings::class, 'drinkshow'])->name('drinkreview.show');

Route::get('/staff/login', [StaffLoginController::class, 'showStaffLoginForm'])->name('staff.login');

Route::post('/staff/login', [StaffLoginController::class, 'login']);

Route::post('/staff/logout', [StaffLoginController::class, 'logout'])->name('staff.logout');

Route::get('/staff/register', [StaffRegisterController::class, 'showStaffRegisterForm'])->name('staff.register');

Route::post('/staff/register', [StaffRegisterController::class, 'register']);

Auth::routes();

route::group(['middleware'=>['auth']],function(){

	route::controller(FavouriteController::class)->group(function(){
		route::get('favourites', 'index')->name('favourite.index');
		route::post('favourites', 'add')->name('favourite.add');
		route::delete('favourites', 'remove')->name('favourite.remove');
		route::get('drinkfavourites', 'drinkindex')->name('drinkfavourite.index');
		route::post('drinkfavourites', 'drinkadd')->name('drinkfavourite.add');
		route::delete('drinkfavourites', 'drinkremove')->name('drinkfavourite.remove');
		route::delete('/', 'welcomeRemove')->name('favourite.welcomeRemove');
		route::post('/', 'welcomeAdd')->name('favourite.welcomeAdd');
	
	});

	route::controller(UserController::class)->group(function(){
		route::get('profile', 'index')->name('profile.index');
		route::patch('profile', 'update')->name('profile.edit');
		route::delete('profile', 'destroy')->name('profile.delete');
	});

	route::controller(CustomerController::class)->group(function(){
		route::get('/myorders/all-order','index')->name('myorders.index');
		route::get('/view-order/{id}','view')->name('myorders.view');
		route::get('/myorders/on-going','oindex')->name('myorders.ongoing');
		route::get('/myorders/completed','cindex')->name('myorders.completed');
		route::post('/myorders/all-order','clearHistory')->name('myorders.clearHistory');
	});

	route::get('/staff/profile', function() {
		return view('staff/profile');
	});

	route::controller(ReviewRatings::class)->group(function(){
		route::post('/review', 'store')->name('review.store');
		route::patch('/review/{id}/{user_id}', 'update')->name('review.update');
		route::get('/review/{id}/{user_id}/edit', 'edit')->name('review.edit');
		route::delete('/review/{id}/{user_id}', 'delete')->name('review.delete');
		route::post('/drinkreview', 'drinkstore')->name('drinkreview.store');
		route::patch('/drinkreview/{id}/{user_id}', 'drinkupdate')->name('drinkreview.update');
		route::get('/drinkreview/{id}/{user_id}/edit', 'drinkedit')->name('drinkreview.edit');
		route::delete('/drinkreview/{id}/{user_id}', 'drinkdelete')->name('drinkreview.delete');
	});
	
	route::controller(OrderController::class)->group(function(){
		route::get('/staff/order/on-going','index')->name('ongoing.index');
		route::post('/staff/order/on-going','store')->name('ongoing.store');
		route::get('/staff/order/on-going/{id}','show')->name('ongoing.show');
		route::get('/staff/order/completed','cindex')->name('completed.index');
		route::get('/staff/order/all-order','allindex')->name('allorder.index');
		route::patch('/staff/order/on-going/{id}', 'update')->name('stat.update');
		Route::post('/queue/reset', 'resetQueue')->name('queue.reset');
	});

	route::controller(CartController::class)->group(function(){
		route::get('/add-to-cart','cartlist')->name('cartList');
		route::post('/add-to-cart','addToCart')->name('addToCart');
		route::delete('/add-to-cart/{id}','destroy')->name('cart.destroy');
		route::patch('/add-to-cart/{id}','update')->name('cartQupdate');
		route::delete('/add-to/cart', 'clearCart')->name('clearCart');
	});

	Route::get('/staff', function () {
		$dataindex = t_food::where('del_stat', 1)->get();
		return view('staff/food', compact('dataindex'));
	});		

	Route::get('/staff/drinks', function () {
		$dataindex = t_drink::where('del_stat', 1)->get();
		return view('staff/drinks', compact('dataindex'));
	});

	Route::get('/staff/offers', function () {
		return view('staff/offer');
	});
	
	Route::get('/staff/about-us', function () {
		return view('staff/about-us');
	});

	route::controller(FoodController::class)->group(function(){
		route::get('staff/food','index')->name('food.index');
		route::post('staff/food','store')->name('food.store');
		route::get('staff/food/create','create')->name('food.create');
		route::get('staff/food/{food}','show')->name('food.show');
		route::patch('staff/food/{food}','update')->name('food.update');
		route::delete('staff/food/{food}','destroy')->name('food.destroy');
		route::get('staff/food/{food}/edit','edit')->name('food.edit');
	});

	route::controller(DrinkController::class)->group(function(){
		route::get('staff/drink','index')->name('drink.index');
		route::post('staff/drink','store')->name('drink.store');
		route::get('staff/drink/create','create')->name('drink.create');
		route::get('staff/drink/{drink}','show')->name('drink.show');
		route::patch('staff/drink/{drink}','update')->name('drink.update');
		route::delete('staff/drink/{drink}','destroy')->name('drink.destroy');
		route::get('staff/drink/{drink}/edit','edit')->name('drink.edit');
	});
});