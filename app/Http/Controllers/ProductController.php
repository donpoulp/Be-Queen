<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Seeders\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    # afficher les produits

    public function product()
    {
        // $product = DB::table('product')->get();
        //return  $product; // data en json
        return \App\Models\Product::all();
        
    }

//  un product par son id
    public function productShow(string $id)
    {
        $productId = \App\Models\Product::findOrfail($id);
        return [
            $productId
        ];
    }
}
