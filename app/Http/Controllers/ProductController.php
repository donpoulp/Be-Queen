<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    # afficher les produits
    public function product()
    {
        try {
            $products = Product::with('categorie')->get();
            return response()->json($products);
        } catch (Exception $e) {
            return response()->json($e);
        }

        if (Auth::check()) {
        } else {
            return response()->json('la connexion est obligatoire pour cette page');
        }
    }

    //  un product par son id
    public function productShow(string $id)
    {
        try {
            $productId = Product::with('categorie')->findOrfail($id);
            return response()->json([
                $productId
            ]);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    // new product
    public function newProduct(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:50',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'image' => 'required|string',
                'categorie_id' => 'required|exists:categories,id',
            ]);

            $newProduct = new Product($validatedData);

            $newProduct->save();


            return response()->json($newProduct);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    // modifier un produit
    public function updateProduct($id, Request $request)
    {
        try {
            $updateProduct = $request->validate([
                'name' => 'required|string|max:50',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'image' => 'required|string',
                'categorie_id' => 'required|exists:categories,id',
            ]);

            $product = Product::findOrFail($id);
            $product->update($updateProduct);

            return response()->json($updateProduct);
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

            return response()->json($deleteProduct);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }

    public function productCategorie($id)
    {

        try {
            $categorie = Categorie::with('product')->findOrFail($id);
            return response()->json($categorie);
        } catch (Exception $e) {
            return response()->json($e);
        }
    }
}
