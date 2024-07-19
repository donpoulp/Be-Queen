<?php

namespace App\Http\Controllers;

use App\Models\CustomProduct;
use Illuminate\Http\Request;

class CustomProductController extends Controller
{
    # GET
    public function ShowCustomProducts(){
        return response()->json(CustomProduct::all());
    }
    public function ShowCustomProduct($id){
        return response()->json(CustomProduct::find($id));
    }

    # POST
    public function CreateCustomProducts(Request $request){

        $custom = $request->validate([
            'cadre_id' => ['required', 'integer'],
            'moyen_de_propulsion_id' => ['required', 'integer'],
            'roue_id' => ['required', 'integer'],
            'porte_bagage_id' => ['nullable', 'integer'],
            'guidon_id' => ['required', 'integer'],
            'pedale_id' => ['required', 'integer'],
            'poignier_id' => ['required', 'integer'],
        ]);

        $custom = new CustomProduct();
        $custom->cadre_id = $request->input('cadre_id');
        $custom->moyen_de_propulsion_id = $request->input('moyen_de_propulsion_id');
        $custom->roue_id = $request->input('roue_id');
        $custom->porte_bagage_id = $request->input('porte_bagage_id');
        $custom->guidon_id = $request->input('guidon_id');
        $custom->pedale_id = $request->input('pedale_id');
        $custom->poignier_id = $request->input('poignier_id');
        $custom->save();
        return response()->json($custom);
    }
    # PUT
    public function ModifCustomProducts(Request $request){

        $custom = $request->validate([
            'cadre_id' => ['required', 'integer'],
            'moyen_de_propulsion_id' => ['required', 'integer'],
            'roue_id' => ['required', 'integer'],
            'porte_bagage_id' => ['nullable', 'integer'],
            'guidon_id' => ['required', 'integer'],
            'pedale_id' => ['required', 'integer'],
            'poignier_id' => ['required', 'integer'],
        ]);

        $custom = CustomProduct::find($request->id);
        if($custom){
            $custom->cadre_id = $request->input('cadre_id');
            $custom->moyen_de_propulsion_id = $request->input('moyen_de_propulsion_id');
            $custom->roue_id = $request->input('roue_id');
            $custom->porte_bagage_id = $request->input('porte_bagage_id');
            $custom->guidon_id = $request->input('guidon_id');
            $custom->pedale_id = $request->input('pedale_id');
            $custom->poignier_id = $request->input('poignier_id');
            $custom->save();
            return response()->json($custom);
        }
    }

    # PATCH
    public function ModifColumnCustomProduct(Request $request){

        $custom = $request->validate([
            'cadre_id' => ['required', 'integer'],
            'moyen_de_propulsion_id' => ['required', 'integer'],
            'roue_id' => ['required', 'integer'],
            'porte_bagage_id' => ['nullable', 'integer'],
            'guidon_id' => ['required', 'integer'],
            'pedale_id' => ['required', 'integer'],
            'poignier_id' => ['required', 'integer'],
        ]);

        $custom = CustomProduct::find($request->id);
        if($custom){
            $custom->cadre_id = $request->input('cadre_id');
            $custom->save();
            return response()->json($custom);
        }
    }
    # DELETE
    public function DeleteCustomProduct(Request $request){
        $custom = CustomProduct::find($request->id);
        if($custom){
            $custom->delete();
            return response()->json("la categorie est bien supprimer");
        }
    }
}
