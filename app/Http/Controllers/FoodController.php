<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\food\t_food;
use App\Models\food\l_food;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index()
    {
        $dataindex = t_food::where('del_stat',1)->get();
        return view('food.index',compact('dataindex'));
    }
    
    public function create()
    {
        return view('food.create');
    }

    public function store(Request $request)
    {
        $inputArray1 = $request->input_array_name1;
        $inputArray2 = $request->input_array_name2;
        $inputArray3 = $request->input_array_name3;
        $inputArray4 = $request->input_array_name4;
        $inputArray5 = $request->input_array_name5;

        $inputArrayPrice1 = $request->input_array_price1;
        $inputArrayPrice2 = $request->input_array_price2;
        $inputArrayPrice3 = $request->input_array_price3;
        $inputArrayPrice4 = $request->input_array_price4;
        $inputArrayPrice5 = $request->input_array_price5;

        $jsonInputArray1 = implode(', ' , $inputArray1);
        $jsonInputArray2 = implode(', ' , $inputArray2);
        $jsonInputArray3 = implode(', ' , $inputArray3);
        $jsonInputArray4 = implode(', ' , $inputArray4);
        $jsonInputArray5 = implode(', ' , $inputArray5);

        $jsonInputArrayPrice1 = implode(', ' , $inputArrayPrice1);
        $jsonInputArrayPrice2 = implode(', ' , $inputArrayPrice2);
        $jsonInputArrayPrice3 = implode(', ' , $inputArrayPrice3);
        $jsonInputArrayPrice4 = implode(', ' , $inputArrayPrice4);
        $jsonInputArrayPrice5 = implode(', ' , $inputArrayPrice5);
        $request->validate([
            'image' => 'image|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $datacreate= t_food::create([
            'name' => $request->name,
            'price_in_sgd' => $request->price,
            'description' => $request->desc,
            'image' => $request -> file('image')->store('food-images'),
            'cust_head1' => $request->header1,
            'cust_head2' => $request->header2,
            'cust_head3' => $request->header3,
            'cust_head4' => $request->header4,
            'cust_head5' => $request->header5,
            'requirements1' => $request->customization_header1,
            'requirements2' => $request->customization_header2,
            'requirements3' => $request->customization_header3,
            'requirements4' => $request->customization_header4,
            'requirements5' => $request->customization_header5,
            'head1_items' => $jsonInputArray1,
            'head2_items' => $jsonInputArray2,
            'head3_items' => $jsonInputArray3,
            'head4_items' => $jsonInputArray4,
            'head5_items' => $jsonInputArray5,
            'head1_price' => $jsonInputArrayPrice1,
            'head2_price' => $jsonInputArrayPrice2,
            'head3_price' => $jsonInputArrayPrice3,
            'head4_price' => $jsonInputArrayPrice4,
            'head5_price' => $jsonInputArrayPrice5,
            'del_stat'=>'1',
        ]);

        return redirect()->route('food.index')->with('success', "{$datacreate->name} has been created successfully");
    }

    public function show($id)
    {
        $food = t_food::find($id);
        return view('customer/food/fooddetail', compact('food'));
    }

    public function edit($id)
    {
        $dataedit = t_food::find($id);
        return view('food.edit',compact('dataedit'));
    }

    public function update(Request $request, $id)
    {
        $dataupdate = t_food::find($id);

        $inputArray1 = $request->input_array_name1;
        $inputArray2 = $request->input_array_name2;
        $inputArray3 = $request->input_array_name3;
        $inputArray4 = $request->input_array_name4;
        $inputArray5 = $request->input_array_name5;

        $inputArrayPrice1 = $request->input_array_price1;
        $inputArrayPrice2 = $request->input_array_price2;
        $inputArrayPrice3 = $request->input_array_price3;
        $inputArrayPrice4 = $request->input_array_price4;
        $inputArrayPrice5 = $request->input_array_price5;

        $jsonInputArray1 = implode(', ' , $inputArray1);
        $jsonInputArray2 = implode(', ' , $inputArray2);
        $jsonInputArray3 = implode(', ' , $inputArray3);
        $jsonInputArray4 = implode(', ' , $inputArray4);
        $jsonInputArray5 = implode(', ' , $inputArray5);

        $jsonInputArrayPrice1 = implode(', ' , $inputArrayPrice1);
        $jsonInputArrayPrice2 = implode(', ' , $inputArrayPrice2);
        $jsonInputArrayPrice3 = implode(', ' , $inputArrayPrice3);
        $jsonInputArrayPrice4 = implode(', ' , $inputArrayPrice4);
        $jsonInputArrayPrice5 = implode(', ' , $inputArrayPrice5);
        $request->validate([
            'image' => 'image|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $dataupdate->update([
            'name' => $request->name,
            'price_in_sgd' => $request->price,
            'description' => $request->desc,
            'cust_head1' => $request->header1,
            'cust_head2' => $request->header2,
            'cust_head3' => $request->header3,
            'cust_head4' => $request->header4,
            'cust_head5' => $request->header5,
            'requirements1' => $request->customization_header1,
            'requirements2' => $request->customization_header2,
            'requirements3' => $request->customization_header3,
            'requirements4' => $request->customization_header4,
            'requirements5' => $request->customization_header5,
            'head1_items' => $jsonInputArray1,
            'head2_items' => $jsonInputArray2,
            'head3_items' => $jsonInputArray3,
            'head4_items' => $jsonInputArray4,
            'head5_items' => $jsonInputArray5,
            'head1_price' => $jsonInputArrayPrice1,
            'head2_price' => $jsonInputArrayPrice2,
            'head3_price' => $jsonInputArrayPrice3,
            'head4_price' => $jsonInputArrayPrice4,
            'head5_price' => $jsonInputArrayPrice5,
        ]);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $imagePath = $request->file('image')->store('food-images');
            $dataupdate->update(['image' => $imagePath]);
        }

        return redirect()->route('food.index')->with('update', "{$dataupdate->name} has been updated successfully");
    }

    public function destroy($id)
    {
        $datadelete = t_food::find($id);
        if ($datadelete->image) {
            Storage::delete($datadelete->image);
        }
        $datadelete->update([
            'del_stat'=> '0',
        ]);
        return redirect()->route('food.index')->with('delete', "{$datadelete->name} has been deleted sucessfully");
    }

    
}
