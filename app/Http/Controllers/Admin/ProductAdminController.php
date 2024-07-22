<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductAdminController extends Controller
{
    public function productAdmin() 
    {
        return view('admin.product');
    }

    // new product
    public function newProduct(Request $request)
    {

        try {
            $validateData = $request->validate([
                'name' => 'bail|required|string|max:50',
                'description' => 'bail|required|string',
                'price' => 'bail|required|numeric|min:0',
                'image' => 'bail|required|string',
                'category_id' => 'bail|required|exists:categories,id',
            ]);

            $newProduct = new Product($validateData);

            $newProduct->save();


            return response()->json(['newProduct'=>$newProduct]);
        } catch (Exception $e) {
            return view('admin.newProduct');
        }
    }
}
