<?php

namespace App\Http\Controllers;

use App\Models\food\t_food;
use App\Models\drink\t_drink;
use App\Models\reviewrating;
use App\Models\t_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewRatings extends Controller
{
    public function store(Request $request){
        $user = Auth::user();
        $user_id = $user->id;
        $user_name = $user->name;
        $user_profile = $user->profile_image;

        $hasOrder = t_order::where('user_id', $user_id)
        ->whereHas('orderitems', function ($query) use ($request) {
            $query->where('food_id', $request->food_id);
        })
        ->first();
        if($hasOrder) {
                $data = reviewrating::create([
                    'user_id' => $user_id,
                    'user_name' => $user_name,
                    'user_profile' => $user_profile,
                    'food_id' => $request -> food_id,
                    'drink_id' => $request -> drink_id,
                    'comments' => $request -> comment,
                    'star_rating' => $request -> rating,
                ]);
                return redirect()->back()->with('addreview', "Thank you for leaving your review");
        } else {
            
            return redirect()->back()->with('neverOrder', "You need to purchase this menu before leaving a review");
        }
    }
    
    public function drinkstore(Request $request){
        $user = Auth::user();
        $user_id = $user->id;
        $user_name = $user->name;
        $user_profile = $user->profile_image;

        $hasOrder = t_order::where('user_id', $user_id)
        ->whereHas('orderitems', function ($query) use ($request) {
            $query->where('drink_id', $request->drink_id);
        })
        ->first();
        if($hasOrder) {
                $data = reviewrating::create([
                    'user_id' => $user_id,
                    'user_name' => $user_name,
                    'user_profile' => $user_profile,
                    'food_id' => $request -> food_id,
                    'drink_id' => $request -> drink_id,
                    'comments' => $request -> comment,
                    'star_rating' => $request -> rating,
                ]);
                return redirect()->back()->with('addreview', "Thank you for leaving your review");
        } else {
            
            return redirect()->back()->with('neverOrder', "You need to purchase this menu before leaving a review");

        }
        
    }

    public function show($id) {
        $food = t_food::find($id);
        $totalRev = reviewrating::where('food_id', $id)->sum('star_rating');
        $countRev = reviewrating::where('food_id', $id)->count();
        if($countRev != 0) {
            $averageRate = number_format($totalRev / $countRev, 1);
        } else {
            $averageRate = 0;   
        }

        $datashow = reviewrating::where('status', 'active')
            ->where('food_id', $id)->orderBy('id', 'desc')
            ->get();
        $fiveStar = reviewrating::where('food_id', $id)
            ->where('star_rating','5')
            ->count();
        $fourStar = reviewrating::where('food_id', $id)
            ->where('star_rating','4')
            ->count();
        $threeStar = reviewrating::where('food_id', $id)
            ->where('star_rating','3')
            ->count();
        $twoStar = reviewrating::where('food_id', $id)
            ->where('star_rating','2')
            ->count();
        $oneStar = reviewrating::where('food_id', $id)
            ->where('star_rating','1')
            ->count();
        
        return view('/customer/food/reviewratings',compact('datashow', 'food', 'countRev', 'averageRate', 'fiveStar','fourStar','threeStar',
            'twoStar', 'oneStar'));
    }

    public function drinkshow($id) {
        $drink = t_drink::find($id);
        $totalRev = reviewrating::where('drink_id', $id)->sum('star_rating');
        $countRev = reviewrating::where('drink_id', $id)->count();
        if($countRev != 0) {
            $averageRate = number_format($totalRev / $countRev, 1);
        } else {
            $averageRate = 0;   
        }

        $datashow = reviewrating::where('status', 'active')
            ->where('drink_id', $id)->orderBy('id', 'desc')
            ->get();
        $fiveStar = reviewrating::where('drink_id', $id)
            ->where('star_rating','5')
            ->count();
        $fourStar = reviewrating::where('drink_id', $id)
            ->where('star_rating','4')
            ->count();
        $threeStar = reviewrating::where('drink_id', $id)
            ->where('star_rating','3')
            ->count();
        $twoStar = reviewrating::where('drink_id', $id)
            ->where('star_rating','2')
            ->count();
        $oneStar = reviewrating::where('drink_id', $id)
            ->where('star_rating','1')
            ->count();
        
        return view('/customer/drink/reviewratings',compact('datashow', 'drink', 'countRev', 'averageRate', 'fiveStar','fourStar','threeStar',
            'twoStar', 'oneStar'));
    }

    public function edit(Request $request, $food_id, $id) {
        $food = t_food::find($food_id);
        $user = Auth::user();
        $user_id = $user->id;
        $dataedit = reviewrating::where('food_id', $food_id)
            ->where('user_id', $id)
            ->first();
        return view('customer/food/reviewedit', compact('dataedit', 'food'));
    }

    public function update(Request $request, $food_id, $id) {
        $food = t_food::find($food_id);
        $user = Auth::user();
        $user_id = $user->id;
        $dataupdate = reviewrating::where('food_id', $food_id)
            ->where('user_id', $id)
            ->first()->update([
                'user_profile' => $request->user_profile,
                'star_rating' => $request->rating,
                'comments' => $request->comment,
            ]);
        return redirect()->route('review.show',[$food->id])->with('update',"Your review has been updated");
    }

    public function delete($food_id, $id) {
        $food = t_food::find($food_id);
        $dataupdate = reviewrating::where('food_id', $food_id)
            ->where('user_id', $id)
            ->first()->delete();
        return redirect()->route('review.show',[$food->id])->with('delete',"Your review has been deleted");
    }

    public function drinkedit(Request $request, $drink_id, $id) {
        $drink = t_drink::find($drink_id);
        $user = Auth::user();
        $user_id = $user->id;
        $dataedit = reviewrating::where('drink_id', $drink_id)
            ->where('user_id', $id)
            ->first();
        return view('customer/drink/reviewedit', compact('dataedit', 'drink'));
    }

    public function drinkupdate(Request $request, $drink_id, $id) {
        $drink = t_drink::find($drink_id);
        $user = Auth::user();
        $user_id = $user->id;
        $dataupdate = reviewrating::where('drink_id', $drink_id)
            ->where('user_id', $id)
            ->first()->update([
                'user_profile' => $request->user_profile,
                'star_rating' => $request->rating,
                'comments' => $request->comment,
            ]);
        return redirect()->route('drinkreview.show',[$drink->id])->with('update',"Your review has been updated");
    }

    public function drinkdelete($drink_id, $id) {
        $drink = t_drink::find($drink_id);
        $dataupdate = reviewrating::where('drink_id', $drink_id)
            ->where('user_id', $id)
            ->first()->delete();
        return redirect()->route('drinkreview.show',[$drink->id])->with('delete',"Your review has been deleted");
    }
}



