<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ProductController extends Controller
{
    # afficher les produits
    public function product()
    {
        try {
            $products = Product::with('category')->get();
            
            return response()->json(['getProductWithCategory'=>$products]);

        } catch (Exception $e) {
            return response()->json($e);
        }

    }

    //  un product par son id
    public function productShow(string $id)
    {
       
       
        try {
            $productId = Product::with('category')->findOrfail($id);
            return response()->json([
                'getProductById'=>$productId
            ]);
        } catch (Exception $e) {
            return response()->json($e);
        } 
    }

    

    // modifier un produit
    public function updateProduct($id, Request $request)
    {
        try {
            $updateProduct = $request->validate([
                'name' => 'bail|required|string|max:50',
                'description' => 'bail|required|string',
                'price' => 'bail|required|numeric|min:0',
                'image' => 'bail|required|string',
                'categorie_id' => 'required|exists:categories,id',
            ]);

            $product = Product::findOrFail($id);
            $product->update($updateProduct);

            return response()->json(['updateProduct'=>$updateProduct]);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    // suprimer un produit
    public function deleteProduct($id)
    {

        try {
            $deleteProduct = Product::findOrFail($id);
            $deleteProduct->delete();

            return response()->json(['deletOneProduct'=>$deleteProduct]);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    public function categorieProduct($id)
    {

        try {
            $categorie = Categorie::with('product')->findOrFail($id);
            return response()->json(['categoryIdWithProduct'=>$categorie]);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }


}
