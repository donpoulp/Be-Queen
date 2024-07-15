<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ProductController extends Controller
{
    # afficher les produits

    public function product()
    {
        // $product = DB::table('product')->get();
        //return  $product; // data en json
        return response()->json(Product::all());
    }

    //  un product par son id
    public function productShow(string $id)
    {
        $productId = Product::findOrfail($id);
        return response()->json([
            $productId
        ]);
    }

    // new product
    public function newProduct(Request $request)
    {
        $newProduct = new Product();

        $newProduct->name = $request->input('name');
        $newProduct->description = $request->input('description');
        $newProduct->price = $request->input('price');
        $newProduct->image = $request->input('image');

        $newProduct->save();


        return response()->json($newProduct);
    }

    // modifier un produit
    public function updateProduct($id, Request $request)
    {
        $updateProduct = $request->validate([
            'name' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
            'price' => 'nullable',
        ]);

        $product = Product::findOrFail($id);
        $product->update($updateProduct);

        return response()->json($updateProduct);
    }

    // suprimer un produit
    public function deleteProduct($id)
    {

        $deleteProduct = Product::findOrFail($id);
        $deleteProduct->delete();

        return response()->json($deleteProduct);
    }
}
