<?php

namespace App\Http\Controllers;

use App\Models\drink\t_drink;
use App\Models\t_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\food\t_food;

class CustomerController extends Controller
{
    public function index() {
        $user = Auth::user();
        $user_id = $user->id;
        $orders = t_order::where('user_id', $user_id)->where('del_stat', 1)->get();
        return view('customer/order/index', compact('orders')); 
    }

    public function cindex() {
        $user = Auth::user();
        $user_id = $user->id;
        $orders = t_order::where('user_id', $user_id)->where('status','Completed')->where('del_stat', 1)->get();
        return view('customer/order/completed', compact('orders')); 
    }

    public function oindex() {
        $user = Auth::user();
        $user_id = $user->id;
        $orders = t_order::where('user_id', $user_id)->where('status','Pending')->where('del_stat',1)->get();
        return view('customer/order/on-going', compact('orders')); 
    }

    public function view($id) {
        $user = Auth::user();
        $user_id = $user->id;
        $order = t_order::where('id', $id)->where('user_id', $user_id)->first();
        return view('customer/order/view', compact('order'));
    }

    public function clearHistory() {
        $user = Auth::user();
        $user_id = $user->id;
        $dataupdate = t_order::where('user_id', $user_id)->update(['del_stat' => 0]);
        return redirect()->back()->with('success',"Order history has been cleared");
    }

    public function foodListAjax() {
        $food = t_food::select('name')->where('del_stat', 1)->get();
        $data = [];
    
        foreach ($food as $item) {
            $data[] = $item['name'];
        }
        return $data;
    }

    public function drinkListAjax() {
        $drink= t_drink::select('name')->where('del_stat', 1)->get();
        $data = [];
    
        foreach ($drink as $item) {
            $data[] = $item['name'];
        }
        return $data;
    }
    
    public function searchIndex(Request $request) {
        $searchedProduct = $request->product_name;
        $productAvail = t_food::where("name", "LIKE", "%$searchedProduct%")->first();
        $product = t_food::where("name", "LIKE", "%$searchedProduct%")->get();    
  
        if (!$productAvail) {
            return redirect()->back()->with('searchNotFound', "{$searchedProduct} not found");
        } else {
            return view('customer/food/foodsearch', compact('product', 'searchedProduct'));
        }
    }

    public function searchDrink(Request $request) {
        $searchedProduct = $request -> product_name;
        
        $productAvail = t_drink::where("name", "LIKE", "%$searchedProduct%")->first();
        $product = t_drink::where("name", "LIKE", "%$searchedProduct%")->get();
        if($productAvail) {
            return view('customer/drink/drinksearch', compact('product', 'searchedProduct'));
        } else {
            return redirect()->back()->with('searchNotFound', "{$searchedProduct} not found");
        }
    }
}
