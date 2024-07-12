<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieControllers extends Controller
{
    public function ShowCategories(){
        return response()->json(Categorie::all());
    }

    public function ShowCategorie(int $id){
        return response()->json(Categorie::where('id',$id)->get());
    }


    // public function RecupAllCategorie(){ 
    //     foreach (Categorie::all() as $ca) {
    //             echo $ca;
    //         }
    // }

    // public function Recup1Categorie(){ 
    //     foreach (Categorie::all() as $ca) {
    //             echo $ca;
    //         }
    // }
}