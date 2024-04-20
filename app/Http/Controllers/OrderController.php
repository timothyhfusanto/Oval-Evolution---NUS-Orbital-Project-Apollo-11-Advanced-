<?php

namespace App\Http\Controllers;

use App\Models\t_cart;
use Illuminate\Http\Request;
use App\Models\t_order;
use App\Models\orderitems;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $dataindex = t_order::where('status', 'Pending')->get();

        return view('staff/order/on-going', compact('dataindex'));
    }

    public function cindex() 
    {
        $dataindex = t_order::where('status', 'Completed')->get();

        return view('staff/order/completed', compact('dataindex'));
    }

    public function allindex() 
    {
        $dataindex = t_order::get();

        return view('staff/order/all-order', compact('dataindex'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;

        $maxQueue = t_order::max('queue');
        $previousMaxQueue = session('max_queue');

        if (session()->has('queue_reset')) {
            $maxQueue = null;
            session()->forget('queue_reset');
        }
        
        if ($maxQueue === null) {
            $queue = 1;
        } else {
            $queue = $previousMaxQueue !== null ? $previousMaxQueue + 1 : $maxQueue + 1;
        }

        if($request->payment == "Cash") {
            $datacreate = t_order::create([
                'queue' => $queue,
                'user_id' => $user_id,
                'payment_mode' => $request->payment,
                'payment_id' => $request->payment_id,
                'total_price' => $request->total_price,
                'del_stat' => "1",
            ]);
        } else {
            $datacreate = t_order::create([
                'queue' => $queue,
                'user_id' => $user_id,
                'payment_mode' => "Paypal",
                'payment_id' => $request->payment_id,
                'total_price' => $request->total_price,
                'del_stat' => "1",
            ]);
        }

        $cartItems = t_cart::where('user_id', $user_id)->get();
        foreach($cartItems as $item) {
            $orderitems = orderitems::create([
                'order_id' =>  $datacreate->id,
                'food_id' => $item->food_id,
                'drink_id' => $item -> drink_id,
                'qty' => $item->quantity,
                'notes' => $item->notes,
                'cust_head1' => $item->cust_head1,
                'cust_head2' => $item->cust_head2,
                'cust_head3' => $item->cust_head3,
                'cust_head4' => $item->cust_head4,
                'cust_head5' => $item->cust_head5,
                'head1_items' => $item->head1_items,
                'head2_items' => $item->head2_items,
                'head3_items' => $item->head3_items,
                'head4_items' => $item->head4_items,
                'head5_items' => $item->head5_items,
                'head1_price' => $item->head1_price,
                'head2_price' => $item->head2_price,
                'head3_price' => $item->head3_price,
                'head4_price' => $item->head4_price,
                'head5_price' => $item->head5_price,
            ]);
        }
        session(['max_queue' => $queue]);

        $cartItems = t_cart::where('user_id', $user_id)->get();
        t_cart::destroy($cartItems);

        if($request->payment_mode== "Paypal") {
            return response()->json(['status'=>"Your order number is {$datacreate->queue}"]);
        }
            return redirect('myorders/all-order')->with('status',"Your order number is {$datacreate->queue}");
    }

    public function resetQueue()
    {
        session(['queue_reset' => true]);
        return redirect()->back()->with('status', 'Queue has been reset successfully');
    }

    public function show($id)
    {
        $datashow = t_order::find($id);
        $user = Auth::user();
        $user_id = $user->id;

        $order = t_order::where('id', $id)->first();
        return view('staff/order/detail', compact('order'));
        
    }

    public function update(Request $request, $id)
    {
        $dataupdate = t_order::find($id);
        
        $dataupdate->update([
            'status' => $request -> changestat,
        ]);

        if($dataupdate->status === 'Pending'){
            return redirect('staff/order/on-going')->with('update', 'Order updated successfully.');
        } else {
            return redirect('staff/order/completed')->with('update', 'Order updated successfully.');
        }
    }
}
