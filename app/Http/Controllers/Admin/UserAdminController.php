<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserAdminController extends Controller
{
    public function userShow(): object
    {
        $users = User::all();
        return view ('admin.user', compact('users'));
    }


    public function userDelete(Request $request){
        $users = User::findOrFail($request->id);
        $users->delete();
        //return response()->Json($users);
        //return redirect()->route('admin.user')->with('status'.'Client bien supprimé');
        return $this->userShow()->with('message', 'User supprimé');
    }
    public function userPost(Request $request){
        $validate = $request->validate([
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|string|email|max:70|unique:users',
            'password' => 'required|string',
            'civility' => 'required|string|max:20',
            'adress' => 'required|string|max:60',
            'city' => 'required|string|max:30',
            'phone_number' => 'required|string|max:15',
        ]);
       User::create([
           'first_name' => $validate->first_name,
           'last_name' => $validate->last_name,
           'email' => $validate->email,
           'password' => $validate->password,
           'civility' => $validate->civility,
           'adress' => $validate->adress,
           'city' => $validate->city,
           'phone_number' => $validate->phone_number,
       ]);
     return view ('admin.userPost');

    }
}
