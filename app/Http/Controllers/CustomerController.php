<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customershow(){
        return response()

    }

    public function customershowid($id)
    {
        return response()->json([

            'name' => 'Abigail',
            'adresse' => 'rue blabla',

        ]);
    }
}
