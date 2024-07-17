<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class UserController extends Controller
{
    public function customershowid(string $id): object
    {
        $userId = User::findOrFail($id);
        return response()->json([$userId]);
    }

    public function customershow(): object
    {

        return response()->json(User::all());
    }

    public function updateCustomer($id, Request $request)
    {
        $updatecustomer = $request->validate([
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable',
            'civility' => 'nullable',
            'address' => 'nullable',
            'city' => 'nullable',
            'phone_number' => 'nullable'
        ]);

        $user = User::findOrFail($id);
        $user->update($updatecustomer);

        return response()->json($updatecustomer);

    }

    public function postCustomer(Request $request)
    {
//        $postcustomer = $request->validate([
//            'first_name' => 'nullable',
//            'last_name' => 'nullable',
//            'email' => 'nullable',
//            'password' => 'nullable',
//            'civility' => 'nullable',
//            'address' => 'nullable',
//            'city' => 'nullable',
//            'phone_number' => 'nullable'
//        ]);
        $postcustomer = new User();
        $postcustomer = User::create($request->all());
        $postcustomer->save();
        return response()->json($postcustomer);
    }



public function deletecustomer(Request $request, $id)
    {
        $deletecustomer = User::findOrFail($id);
        $deletecustomer->delete();
        return response()->json(User::all());
    }


    public function getOrders($id) {

        $user = User::with('orders')->findOrFail($id);

        return response()->json($user);
    }
}