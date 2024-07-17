<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;

class CategorieControllers extends Controller
{
    public function ShowCategories(){
        return response()->json(Categorie::all());
    }

    public function ShowCategorie(int $id){
        return response()->json(Categorie::where('id',$id)->get());
    }

    #POST
    public function InsertCategorie(Request $request){
        
        $cat = $request->validate([
            'name' => ['required', 'max:50'],
            'description' => ['required', 'max:255'],
        ]);

        $cat = new Categorie();
        $cat->name = $request->input('name');
        $cat->description = $request->input('description');
        $cat->save();
        return response()->json($cat);
    }

    #PUT
    public function ModifCategorie(Request $request){
        $categorie = Categorie::find($request->id);
        if($categorie){
            $categorie->name=$request->name;
            $categorie->description=$request->description;
            $categorie->save();
            return response()->json($categorie);
        }
    }

    #PATCH
    public function Modif1RowCategorie(Request $request){
        $categorie = Categorie::find($request->id);
        if($categorie){
            $categorie->name=$request->name;
            $categorie->save();
            return response()->json($categorie);
        }
    }

    #DELETE
    public function DeleteCategorie(Request $request){
        $categorie = Categorie::find($request->id);
        if($categorie){
            $categorie->delete();
            return response()->json("la categorie est bien supprimer");
        }
    }
}