<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieControllers extends Controller
{
    public function ShowCategories(){
        return 'liste de categorie';
    }
    public function ShowCategorie(int $id){
        return 'categorie n°'.$id;
    }
}
