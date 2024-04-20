<?php

namespace App\Http\Controllers;

use App\Models\food\t_food;
use Illuminate\Support\Facades\Auth;


class WelcomeController extends Controller
{
    public function index() {
        $user = Auth::user();
        $dataindex = t_food::where('del_stat', 1)->get();
        
        return view('customer/food/welcome', compact('dataindex'));
    }
}
