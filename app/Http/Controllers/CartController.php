<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_cart;
use App\Models\food\t_food;
use App\Models\drink\t_drink;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function addToCart(Request $request) {
        $user = Auth::user();

        $user_id = $user->id;

        if ($request->food_id !== null) {
            $tFood = t_food::find($request->food_id);
            $head1Items = $tFood->requirements1 === 'yes' ? $request->options1 : ($request->checkOptions1 !== null ? implode(', ',$request->checkOptions1) : null);
            $head2Items = $tFood->requirements2 === 'yes' ? $request->options2 : ($request->checkOptions2 !== null ? implode(', ',$request->checkOptions2) : null);
            $head3Items = $tFood->requirements3 === 'yes' ? $request->options3 : ($request->checkOptions3 !== null ? implode(', ',$request->checkOptions3) : null);
            $head4Items = $tFood->requirements4 === 'yes' ? $request->options4 : ($request->checkOptions4 !== null ? implode(', ',$request->checkOptions4) : null);
            $head5Items = $tFood->requirements5 === 'yes' ? $request->options5 : ($request->checkOptions5 !== null ? implode(', ',$request->checkOptions5) : null);

            $custhead1 = $tFood->cust_head1;
            $custhead2 = $tFood->cust_head2;
            $custhead3 = $tFood->cust_head3;
            $custhead4 = $tFood->cust_head4;
            $custhead5 = $tFood->cust_head5;

            function calculateSum1($tFood, $selectedOptions1, $headItems1)
            {
                $head1Options = explode(', ', $tFood->head1_items);
                $head1Prices = array_map('floatval', explode(', ', $tFood->head1_price));
                if ($tFood->requirements1 === 'yes') {
                    $option1Key = array_search($headItems1, $head1Options);
                    if ($option1Key !== false) {
                        return $head1Prices[$option1Key];
                    }
                } else {
                    if ($selectedOptions1 !== null) {
                        $selectedIndices1 = [];
                        foreach ($selectedOptions1 as $selectedOption) {
                            $index = array_search($selectedOption, $head1Options);
                            if ($index !== false) {
                                $selectedIndices1[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices1 as $index) {
                            if (isset($head1Prices[$index])) {
                                $sum += $head1Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }
                return null;
            }

            function calculateSum2($tFood, $selectedOptions2, $headItems2)
            {
                $head2Options = explode(', ', $tFood->head2_items);
                $head2Prices = array_map('floatval', explode(', ', $tFood->head2_price));

                if ($tFood->requirements2 === 'yes') {
                    $option2Key = array_search($headItems2, $head2Options);
                    if ($option2Key !== false) {
                        return $head2Prices[$option2Key];
                    }
                } else {
                    if ($selectedOptions2 !== null) {
                        $selectedIndices2 = [];
                        foreach ($selectedOptions2 as $selectedOption) {
                            $index = array_search($selectedOption, $head2Options);
                            if ($index !== false) {
                                $selectedIndices2[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices2 as $index) {
                            if (isset($head2Prices[$index])) {
                                $sum += $head2Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }
                return null;
            }

            function calculateSum3($tFood, $selectedOptions3, $headItems3)
            {
                $head3Options = explode(', ', $tFood->head3_items);
                $head3Prices = array_map('floatval', explode(', ', $tFood->head3_price));

                if ($tFood->requirements3 === 'yes') {
                    $option3Key = array_search($headItems3, $head3Options);
                    if ($option3Key !== false) {
                        return $head3Prices[$option3Key];
                    }
                } else {
                    if ($selectedOptions3 !== null) {
                        $selectedIndices3 = [];
                        foreach ($selectedOptions3 as $selectedOption) {
                            $index = array_search($selectedOption, $head3Options);
                            if ($index !== false) {
                                $selectedIndices3[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices3 as $index) {
                            if (isset($head3Prices[$index])) {
                                $sum += $head3Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }
                return null;
            }

            function calculateSum4($tFood, $selectedOptions4, $headItems4)
            {
                $head4Options = explode(', ', $tFood->head4_items);
                $head4Prices = array_map('floatval', explode(', ', $tFood->head4_price));

                if ($tFood->requirements4 === 'yes') {
                    $option4Key = array_search($headItems4, $head4Options);
                    if ($option4Key !== false) {
                        return $head4Prices[$option4Key];
                    }
                } else {
                    if ($selectedOptions4 !== null) {
                        $selectedIndices4 = [];
                        foreach ($selectedOptions4 as $selectedOption) {
                            $index = array_search($selectedOption, $head4Options);
                            if ($index !== false) {
                                $selectedIndices4[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices4 as $index) {
                            if (isset($head4Prices[$index])) {
                                $sum += $head4Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }
                return null;
            }

            function calculateSum5($tFood, $selectedOptions5, $headItems5)
            {
                $head5Options = explode(', ', $tFood->head5_items);
                $head5Prices = array_map('floatval', explode(', ', $tFood->head5_price));

                if ($tFood->requirements5 === 'yes') {
                    $option5Key = array_search($headItems5, $head5Options);
                    if ($option5Key !== false) {
                        return $head5Prices[$option5Key];
                    }
                } else {
                    if ($selectedOptions5 !== null) {
                        $selectedIndices5 = [];
                        foreach ($selectedOptions5 as $selectedOption) {
                            $index = array_search($selectedOption, $head5Options);
                            if ($index !== false) {
                                $selectedIndices5[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices5 as $index) {
                            if (isset($head5Prices[$index])) {
                                $sum += $head5Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }

                return null;
            }

        } else {
            $tDrink = t_drink::find($request->drink_id);
            $head1Items = $tDrink->requirements1 === 'yes' ? $request->options1 : ($request->checkOptions1 !== null ? implode(', ',$request->checkOptions1) : null);
            $head2Items = $tDrink->requirements2 === 'yes' ? $request->options2 : ($request->checkOptions2 !== null ? implode(', ',$request->checkOptions2) : null);
            $head3Items = $tDrink->requirements3 === 'yes' ? $request->options3 : ($request->checkOptions3 !== null ? implode(', ',$request->checkOptions3) : null);
            $head4Items = $tDrink->requirements4 === 'yes' ? $request->options4 : ($request->checkOptions4 !== null ? implode(', ',$request->checkOptions4) : null);
            $head5Items = $tDrink->requirements5 === 'yes' ? $request->options5 : ($request->checkOptions5 !== null ? implode(', ',$request->checkOptions5) : null);

            $custhead1 = $tDrink->cust_head1;
            $custhead2 = $tDrink->cust_head2;
            $custhead3 = $tDrink->cust_head3;
            $custhead4 = $tDrink->cust_head4;
            $custhead5 = $tDrink->cust_head5;

            function calculateDrinkSum1($tDrink, $selectedOptions1, $headItems1)
            {
                $head1Options = explode(', ', $tDrink->head1_items);
                $head1Prices = array_map('floatval', explode(', ', $tDrink->head1_price));

                if ($tDrink->requirements1 === 'yes') {
                    $option1Key = array_search($headItems1, $head1Options);
                    if ($option1Key !== false) {
                        return $head1Prices[$option1Key];
                    }
                } else {
                    if ($selectedOptions1 !== null) {
                        $selectedIndices1 = [];
                        foreach ($selectedOptions1 as $selectedOption) {
                            $index = array_search($selectedOption, $head1Options);
                            if ($index !== false) {
                                $selectedIndices1[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices1 as $index) {
                            if (isset($head1Prices[$index])) {
                                $sum += $head1Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }

                return null;
            }


            function calculateDrinkSum2($tDrink, $selectedOptions2, $headItems2)
            {
                $head2Options = explode(', ', $tDrink->head2_items);
                $head2Prices = array_map('floatval', explode(', ', $tDrink->head2_price));

                if ($tDrink->requirements2 === 'yes') {
                    $option2Key = array_search($headItems2, $head2Options);
                    if ($option2Key !== false) {
                        return $head2Prices[$option2Key];
                    }
                } else {
                    if ($selectedOptions2 !== null) {
                        $selectedIndices2 = [];
                        foreach ($selectedOptions2 as $selectedOption) {
                            $index = array_search($selectedOption, $head2Options);
                            if ($index !== false) {
                                $selectedIndices2[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices2 as $index) {
                            if (isset($head2Prices[$index])) {
                                $sum += $head2Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }

                return null;
            }

            function calculateDrinkSum3($tDrink, $selectedOptions3, $headItems3)
            {
                $head3Options = explode(', ', $tDrink->head3_items);
                $head3Prices = array_map('floatval', explode(', ', $tDrink->head3_price));

                if ($tDrink->requirements3 === 'yes') {
                    $option3Key = array_search($headItems3, $head3Options);
                    if ($option3Key !== false) {
                        return $head3Prices[$option3Key];
                    }
                } else {
                    if ($selectedOptions3 !== null) {
                        $selectedIndices3 = [];
                        foreach ($selectedOptions3 as $selectedOption) {
                            $index = array_search($selectedOption, $head3Options);
                            if ($index !== false) {
                                $selectedIndices3[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices3 as $index) {
                            if (isset($head3Prices[$index])) {
                                $sum += $head3Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }

                return null;
            }

            function calculateDrinkSum4($tDrink, $selectedOptions4, $headItems4)
            {
                $head4Options = explode(', ', $tDrink->head4_items);
                $head4Prices = array_map('floatval', explode(', ', $tDrink->head4_price));

                if ($tDrink->requirements4 === 'yes') {
                    $option4Key = array_search($headItems4, $head4Options);
                    if ($option4Key !== false) {
                        return $head4Prices[$option4Key];
                    }
                } else {
                    if ($selectedOptions4 !== null) {
                        $selectedIndices4 = [];
                        foreach ($selectedOptions4 as $selectedOption) {
                            $index = array_search($selectedOption, $head4Options);
                            if ($index !== false) {
                                $selectedIndices4[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices4 as $index) {
                            if (isset($head4Prices[$index])) {
                                $sum += $head4Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }
                return null;
            }

            function calculateDrinkSum5($tDrink, $selectedOptions5, $headItems5)
            {
                $head5Options = explode(', ', $tDrink->head5_items);
                $head5Prices = array_map('floatval', explode(', ', $tDrink->head5_price));

                if ($tDrink->requirements5 === 'yes') {
                    $option5Key = array_search($headItems5, $head5Options);
                    if ($option5Key !== false) {
                        return $head5Prices[$option5Key];
                    }
                } else {
                    if ($selectedOptions5 !== null) {
                        $selectedIndices5 = [];
                        foreach ($selectedOptions5 as $selectedOption) {
                            $index = array_search($selectedOption, $head5Options);
                            if ($index !== false) {
                                $selectedIndices5[] = $index;
                            }
                        }

                        $sum = 0;
                        foreach ($selectedIndices5 as $index) {
                            if (isset($head5Prices[$index])) {
                                $sum += $head5Prices[$index];
                            }
                        }
                        return $sum;
                    }
                }
                return null;
            }
        }

        $datacreate = t_cart::where('user_id', $user_id)
        ->where('food_id', $request->food_id)
        ->where('drink_id', $request->drink_id)
        ->where('cust_head1', $custhead1)
        ->where('cust_head2', $custhead2)
        ->where('cust_head3', $custhead3)
        ->where('cust_head4', $custhead4)
        ->where('cust_head5', $custhead5)
        ->where('head1_items', $head1Items)
        ->where('head2_items', $head2Items)
        ->where('head3_items', $head3Items)
        ->where('head4_items', $head4Items)
        ->where('head5_items', $head5Items)
        ->where('notes', $request -> notes)
        ->where('del_stat', 1)
        ->first();

        if ($datacreate) {
            $newQty = $datacreate->quantity += $request->quantity;
            $datacreate->update([
                'quantity' => $newQty,
            ]);
        } else if($request->food_id===null){
            $datacreate = t_cart::create ([
                'user_id' => $user_id,
                'food_id' => $request->food_id,
                'drink_id' => $request->drink_id,
                'quantity' => $request->quantity,
                'cust_head1' => $custhead1,
                'cust_head2' => $custhead2,
                'cust_head3' => $custhead3,
                'cust_head4' => $custhead4,
                'cust_head5' => $custhead5,
                'head1_items' => $head1Items,
                'head2_items' => $head2Items,
                'head3_items' => $head3Items,
                'head4_items' => $head4Items,
                'head5_items' => $head5Items,
                'head1_price' => calculateDrinkSum1($tDrink, $request->checkOptions1, $head1Items),
                'head2_price' => calculateDrinkSum2($tDrink, $request->checkOptions2, $head2Items),
                'head3_price' => calculateDrinkSum3($tDrink, $request->checkOptions3, $head3Items),
                'head4_price' => calculateDrinkSum4($tDrink, $request->checkOptions4, $head4Items),
                'head5_price' => calculateDrinkSum5($tDrink, $request->checkOptions5, $head5Items),
                'notes' => $request -> notes,
            ]);
        } else {
            $datacreate = t_cart::create ([
                'user_id' => $user_id,
                'food_id' => $request->food_id,
                'drink_id' => $request->drink_id,
                'quantity' => $request->quantity,
                'cust_head1' => $custhead1,
                'cust_head2' => $custhead2,
                'cust_head3' => $custhead3,
                'cust_head4' => $custhead4,
                'cust_head5' => $custhead5,
                'head1_items' => $head1Items,
                'head2_items' => $head2Items,
                'head3_items' => $head3Items,
                'head4_items' => $head4Items,
                'head5_items' => $head5Items,
                'head1_price' => calculateSum1($tFood, $request->checkOptions1, $head1Items),
                'head2_price' => calculateSum2($tFood, $request->checkOptions2, $head2Items),
                'head3_price' => calculateSum3($tFood, $request->checkOptions3, $head3Items),
                'head4_price' => calculateSum4($tFood, $request->checkOptions4, $head4Items),
                'head5_price' => calculateSum5($tFood, $request->checkOptions5, $head5Items),
                'notes' => $request -> notes,
            ]);
        }
        return redirect()->back()->with('addToCart', "Item added to cart");
    }

    static function cartItem() {
        $user = Auth::user();

        if ($user) {
            $userId = $user->id;
            return t_cart::where('user_id', $userId)->where('del_stat',1)->sum('quantity');
        }

        return 0;
    }

    public function clearCart() {
        $user = Auth::user();

        if ($user) {
            $userId = $user->id;
            $cart = t_cart::where('user_id', $userId)->get();
            t_cart::destroy($cart);
        }
        return redirect()->back()->with('delete', "Cart has been cleared");
    }

    public function cartList() {
        $user = Auth::user();
        $user_id = $user->id;

        $food_list = DB::table('t_cart')
        ->join('t_food','t_cart.food_id', '=', 't_food.id')
        ->where('t_cart.user_id', $user_id)
        ->where('t_cart.del_stat', 1)
        ->select('t_food.*', 't_cart.quantity as food_quantity', 't_cart.id as cart_id', 't_cart.cust_head1 as cart_cust_head1',
                't_cart.cust_head2 as cart_cust_head2',
                't_cart.cust_head3 as cart_cust_head3',
                't_cart.cust_head4 as cart_cust_head4',
                't_cart.cust_head5 as cart_cust_head5',
                't_cart.head1_items as cart_head1_items',
                't_cart.head2_items as cart_head2_items',
                't_cart.head3_items as cart_head3_items',
                't_cart.head4_items as cart_head4_items',
                't_cart.head5_items as cart_head5_items',
                't_cart.head1_price as cart_head1_price',
                't_cart.head2_price as cart_head2_price',
                't_cart.head3_price as cart_head3_price',
                't_cart.head4_price as cart_head4_price',
                't_cart.head5_price as cart_head5_price',
                't_cart.notes as food_notes')
        ->get();

        $drink_list = DB::table('t_cart')
        ->join('t_drink','t_cart.drink_id', '=', 't_drink.id')
        ->where('t_cart.user_id', $user_id)
        ->where('t_cart.del_stat', 1)
        ->select('t_drink.*', 't_cart.quantity as drink_quantity', 't_cart.id as cart_id', 't_cart.cust_head1 as cart_cust_head1',
                't_cart.cust_head2 as cart_cust_head2',
                't_cart.cust_head3 as cart_cust_head3',
                't_cart.cust_head4 as cart_cust_head4',
                't_cart.cust_head5 as cart_cust_head5',
                't_cart.head1_items as cart_head1_items',
                't_cart.head2_items as cart_head2_items',
                't_cart.head3_items as cart_head3_items',
                't_cart.head4_items as cart_head4_items',
                't_cart.head5_items as cart_head5_items',
                't_cart.head1_price as cart_head1_price',
                't_cart.head2_price as cart_head2_price',
                't_cart.head3_price as cart_head3_price',
                't_cart.head4_price as cart_head4_price',
                't_cart.head5_price as cart_head5_price',
                't_cart.notes as drink_notes')
        ->get();

        return view('customer/cartlist', compact('food_list', 'drink_list'));
    }

    public function destroy($id) {
        $datadelete = t_cart::find($id);
        $datadelete->delete();

        return redirect('/add-to-cart');
    }

    public function update(Request $request, $id) {
        $dataupdate = t_cart::find($id);
        $dataupdate->update([
            'quantity' => $request->quantity,
        ]);

        return redirect('/add-to-cart');
    }
}
