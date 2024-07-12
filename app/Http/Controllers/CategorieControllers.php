<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieControllers extends Controller
{
    public function ShowCategories(){
            return
                [['id'=>1,'nom_categorie'=>'super velo'],
                ['id'=>2,'nom_categorie'=>'ville'],
                ['id'=>3,'nom_categorie'=>'cross']]
;
    }

    public function ShowCategorie(int $id){
        $categorie = $this->ShowCategories();

        foreach($categorie as $ca){
            if ($ca['id'] == $id){
                return ['categorie'=>$ca];
            }
        }
    }
}