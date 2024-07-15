<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function displaySingleOrder(string $id): object {

        $order = DB::table('orders')->where('id_order', $id)->get();

        return response()->json([
            'order'=>$order,
        ]);
    }

    public function displayOrderList() {
        $orders = DB::table('orders')->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }
}
