<?php

namespace App\Http\Controllers;

use App\Models\Cadre;
use App\Models\CustomProduct;
use App\Models\modelusers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class UserController extends Controller
{
    public function customershowid(string $id): object
    {
        $userId = modelusers::findOrFail($id);
        return response()->json([$userId]);
    }

    public function customershow(): object
    {

        return response()->json(modelusers::all());
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

        $user = modelusers::findOrFail($id);
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
        $postcustomer = new modelusers();
        $postcustomer = modelusers::create($request->all());
        $postcustomer->save();
        return response()->json($postcustomer);
    }



public function deletecustomer(Request $request, $id)
    {
        $deletecustomer = modelusers::findOrFail($id);
        $deletecustomer->delete();
        return response()->json(modelusers::all());
    }

    public function test($id){
        $custom = Cadre::with('customProducts')->findOrFail($id);

        return response()->json($custom);

    }


}