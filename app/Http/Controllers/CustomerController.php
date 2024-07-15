<?php

namespace App\Http\Controllers;

use App\Models\modelusers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller;


class CustomerController extends Controller
{
    public function customershowid(string $id):object
    {
       $userId=modelusers::findOrFail($id);
        return response()->json([$userId]);
    }

    public function customershow():object
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

        $user=modelusers::findOrFail($id);
        $user->update($updatecustomer);

        return response()->json($updatecustomer);

    }

}
