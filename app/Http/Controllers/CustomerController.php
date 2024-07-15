<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function customershowid(string $id):object
    {
        return response()->json([
            'id'=>$id,
            ]

        );
    }

    public function customershow():object
    {
        return response()->json([
            'First Name'=>'Don',
            'Last Name'=>'Diego',
            'email'=>'don@diego.com',
            'password'=>'password',
            'civility'=>'mr',
            'adress'=>'rue blabla',
            'phone'=>'0123456789',
        ]);
    }
}
