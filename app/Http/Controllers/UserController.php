<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('customer/profile/index',compact('user'));
    }
    
    public function store(Request $request)
    {
        $check_email = User::where('email',$request->email)->first();
        if($check_email){
            return response()->json(['code'=>400, 'message'=>'email sudah ada']);
        }else{
            User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'address'=> $request->address,
                'mobile_number'=> $request->mobile_number,
                'department_id'=> $request->department_id,
                'role_id'=> $request->role_id,
                'start_from'=> $request->start_from,
                'password'=> bcrypt($request->password),
                'stat_del'=> 1,
            ]);

        return response()->json(['code'=>200, 'message'=>'berhasil']);
        }

    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;
        $data = User::where('id', $userId)->first();

        $request->validate([
            'image' => 'image|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            if ($request->input('oldImage')) {
                Storage::delete($request->input('oldImage'));
            }

            $imagePath = $request->file('image')->store('profile-images');
            $data->update([
                'profile_image' => $imagePath,
                'name' => $request->name,
            ]);
        } elseif ($request->input('removeProfileImage') == 1) {
            if ($request->input('oldImage')) {
                Storage::delete($request->input('oldImage'));
            }
            $data->update([
                'profile_image' => null,
                'name' => $request->name,
            ]);
        } else {
            $data->update([
                'name' => $request->name,
            ]);
        }
        
        return redirect()->back()->with('status', "Profile updated successfully");
    }
    
    public function destroy()
    {
        $user = Auth::user();
        $data = User::where('id', $user->id)->first();
        $data->delete();

        return redirect('/')->with('delAcc', "Account deleted");
    }
}
