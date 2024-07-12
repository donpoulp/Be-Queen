<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function displaySingleOrder(string $id): object {
        return response()->json([
            'id' => $id,
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }

    public function displayOrderList() {
        return response()->json([[
            'id' => '1',
            'name' => 'Abigail',
            'state' => 'CA',

        ],[
            'id' => '2',
            'name' => 'Abigail',
            'state' => 'CA',
        ]]);
    }
}
