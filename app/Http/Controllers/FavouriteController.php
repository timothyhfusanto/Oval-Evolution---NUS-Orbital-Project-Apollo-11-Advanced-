<?php

namespace App\Http\Controllers;

use App\Models\favourite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\drinkfavourite;


class FavouriteController extends Controller
{
    public function index() {
        $user = Auth::user();
        $user_id = $user->id;
        

        $favourite = favourite::where('user_id', $user_id)->get();
        $exist = favourite::where('user_id', $user_id)->first();

        return view('customer/food/favourite', compact('favourite','exist'));
    }

    public function drinkindex() {
        $user = Auth::user();
        $user_id = $user->id;

        $favourite = drinkfavourite::where('user_id', $user_id)->get();
        $exist = drinkfavourite::where('user_id', $user_id)->first();

        return view('customer/drink/drinkfavourite', compact('favourite','exist'));
    }

    public function add(Request $request){
        $user = Auth::user();
        $user_id = $user->id;
        $food_id = $request->food_id;

        $datacreate = favourite::create([
            'food_id' => $food_id,
            'user_id' => $user_id,
        ]);
        return redirect()->back()->with('success', "{$datacreate->food->name} added to favourite");
    }
    
    public function drinkadd(Request $request){
        $user = Auth::user();
        $user_id = $user->id;
        $drink_id = $request->drink_id;

        $datacreate = drinkfavourite::create([
            'drink_id' => $drink_id,
            'user_id' => $user_id,
        ]);
        return redirect()->back()->with('success', "{$datacreate->drink->name} added to favourite");
    }

    public function welcomeAdd(Request $request){
        $user = Auth::user();
        $user_id = $user->id;
        $food_id = $request->food_id;

        $datacreate = favourite::create([
            'food_id' => $food_id,
            'user_id' => $user_id,
        ]);
        return redirect()->back()->with('success', "{$datacreate->food->name} added to favourite");
    }

    public function remove(Request $request) {
        $user = Auth::user();
        $user_id = $user->id;
        $food_id = $request->food_id;
        $favourite = favourite::where('food_id', $food_id)->where('user_id', $user_id)->first();
        $favourite->delete();

        return redirect()->back()->with('delete', "{$favourite->food->name} removed from favourite");
    }

    public function drinkremove(Request $request) {
        $user = Auth::user();
        $user_id = $user->id;
        $drink_id = $request->drink_id;
        $favourite = drinkfavourite::where('drink_id', $drink_id)->where('user_id', $user_id)->first();
        $favourite->delete();

        return redirect()->back()->with('delete', "{$favourite->drink->name} removed from favourite");
    }

    public function welcomeRemove(Request $request) {
        $user = Auth::user();
        $user_id = $user->id;
        $food_id = $request->food_id;
        $favourite = favourite::where('food_id', $food_id)->where('user_id', $user_id)->first();
        $favourite->delete();

        return redirect()->back()->with('delete', "{$favourite->food->name} removed from favourite");
    }
}
