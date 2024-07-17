<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function displaySingleOrder(string $id): object {
        $order = Order::findOrFail($id);
        return response()->json([
            'order'=>$order,
        ]);
    }

    public function displayOrderList() {
        $orders = Order::all();
        return response()->json([
            'orders' => $orders,
        ]);
    }


    public function addOrder(Request $request) {
        $request->validate([
            'status' => 'required|string|max:30',
            'user_id' => 'required|int',
        ]);
        $order = new Order;
        $order->fill($request->only(['status', 'user_id']));
        $order->save();
        return response()->json($order);
    }


    public function updateOrder(string $id, Request $request) {
        $request->validate([
            'status' => 'required|string|max:30',
            'user_id' => 'required|int',
        ]);

        $order = Order::findOrFail($id);
        $order->fill($request->only(['status', 'user_id']));
        $order->save();

        return response()->json($order);
    }


    public function deleteOrder(string $id) {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(['message' => 'The order with the id: ' . $id . ' was successfully deleted'], 200);
    }



    public function getProducts($id) {

        $order = Order::with('products')->findOrFail($id);

        return response()->json($order);
    }

    public function getUser($id) {

        $order = Order::with('user')->findOrFail($id);

        return response()->json($order);
    }

    public function getCustomProducts($id) {

        $order = Order::with('customProducts')->findOrFail($id);

        return response()->json($order);
    }



}
