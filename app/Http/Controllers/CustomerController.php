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
            'name'=>'Don diego',

            ]

        );
    }

    public function customershow():object
    {
        return response()->json([
            'client'=>'Don diego',
        ]);
    }
}
