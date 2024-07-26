<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pedal;
use App\Models\Wheel;
use App\Models\Handle;
use App\Models\Handlebars;
use App\Models\LuggageRack;
use Illuminate\Http\Request;
use App\Models\PropulsionMethod;
use App\Http\Controllers\Controller;
use App\Models\Frame;

class CustomAdminController extends Controller
{
    // ------------------- Wheel  -----------------------------  //
    public function wheelCustom()
    {
        $wheels = Wheel::all();
        $data = [
            'title' => 'Roue'
        ];

        return view('admin.custom.wheel.wheel', $data, compact('wheels'));
    }

    // NewWheel View //
    public function newWheelView()
    {
        $data = [
            'title' => 'Roue'
        ];

        return view('admin.custom.wheel.newWheel', $data);
    }
    // Form New Wheel
    public function newWheel(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'bail|required|string|max:50',
            'color' => 'bail|required|string',
            'price' => 'bail|required|',
            'image' => 'bail|required|string',
            'stock' => 'bail|required|numeric|min:0',
        ]);

        Wheel::create([
            'name' => $validateData['name'],
            'color' => $validateData['color'],
            'price' => $validateData['price'],
            'image' => $validateData['image'],
            'stock' => $validateData['stock'],
        ]);

        return  $this->wheelCustom()->with('message', 'Nouvelle roue crée');
    }

   
    public function getProductWheel($id)
    {
        $wheel = Wheel::findOrFail($id);
       

        return view('admin..custom.wheel.updateWheel', compact('wheel'));

    }

    public function updateWheel(Request $request, $id)
    {
         $request->validate([
            'name' => 'bail|required|string|max:50',
            'color' => 'bail|required|string',
            'price' => 'bail|required|',
            'image' => 'bail|required|string',
            'stock' => 'bail|required|numeric|min:0',
        ]);
        $wheel= Wheel::findOrFail($id);
        $wheel->update([
            'name' =>$request->name,
            'color' =>$request->color,
            'price' => $request->price,
            'image' => $request->image,
            'stock' => $request->stock,
        ]);
        
        return $this->wheelCustom()->with('message', 'Produit modifier');
    }

    // delete
    public function deleteWheel($id)
    {
        $wheel = Wheel::findOrFail($id);
        $wheel->delete();

        return  $this->wheelCustom()->with('message', 'Roue suprimer');
    }


    // -----------------------------------------------------------------  //

    // ---------------------  Pedal ----------------------------------- **********************************************//
    public function pedalCustom()
    {
        $pedals = Pedal::all();
        $data = [
            'title' => 'Pedal'
        ];

        return view('admin.custom.pedal.pedal', $data, compact('pedals'));
    }

    // delete*********************************************************************************************************
    public function deletePedal($id)
    {
        $pedal = Pedal::findOrFail($id);
        $pedal->delete();

        return  $this->pedalCustom()->with('message', 'Pedale suprimer');
    }

    //create*******************************************************************************************************
    public function pedalPost(Request $request){
//
        return view ('admin.custom.pedal.pedalPost');
    }
    public function newPedal(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|string|max:50',
            'color' => 'bail|required|string',
            'price' => 'bail|required|numeric|min:0',
            'material' => 'bail|required|string',
            'image' => 'required|mimes:png,jpeg,jpg|max:2048',
            'stock' => 'bail|required|numeric|min:0',
        ]);

        $filePath = public_path('uploads/pedal');
        $pedal = new Pedal();
        $pedal->name = $request->name;
        $pedal->color = $request->color;
        $pedal->price = $request->price;
        $pedal->material = $request->material;
        $pedal->image = $request->image;
        $pedal->stock = $request->stock;

        if ($request->hasFile(('image'))) {
            $file = $request->file('image');
            $file_name = time() . $file->getClientOriginalName();

            $file->move($filePath, $file_name);
            $pedal->image = $file_name;
        }
        $result = $pedal->save();


        return  $this->pedalCustom()->with('message', 'Nouvelle pedale crée');
    }
    //**********************************************Modifier*************************************************************

    public function pedalPut($id){
         $pedal = Pedal::findOrFail($id);
        return view ('admin.custom.pedal.pedalPut',compact('pedal'));
    }
    public function updatePedal(Request $request, $id)
    {
        $request->validate([
            'name' => 'bail|required|string|max:50',
            'color' => 'bail|required|string',
            'price' => 'bail|required|numeric|min:0',
            'material' => 'bail|required|min:0',
            'image' => 'required',
            'stock' => 'bail|required|numeric|min:0',
        ]);
        $updatePedal= Pedal::findOrFail($id);


        $updatePedal->name = $request->name;
        $updatePedal->color = $request->color;
        $updatePedal->price= $request->price;
        $updatePedal->material= $request->material;
        $updatePedal->image= $request->image;
        $updatePedal->stock= $request->stock;


        if ($request->hasFile('image')) {

            if ($updatePedal->image && file_exists(public_path('uploads/pedal' . $updatePedal->image))) {
                unlink(public_path('uploads/pedal/' . $updatePedal->image));
            }
            $file = $request->file('image');
            $file_name = time() . '' . $file->getClientOriginalName();
            $filePath = public_path('uploads/pedal/');
            $file->move($filePath, $file_name);


            $updatePedal->image = $file_name;
        }
        $updatePedal->save();

        return $this->pedalCustom()->with('message','Produit modifier');
    }

    // -----------------------------------------------------------------  //


    // ------------------------ Moyen de propulsion  ----------------------//
    public function propulsion()
    {
        $propulsions = PropulsionMethod::all();
        $data = [
            'title' => 'Propulsin'
        ];

        return view('admin.custom.propulsion', $data, compact('propulsions'));
    }

    //  delete 
    public function deletePropulsion($id)
    {
        $propulsion = PropulsionMethod::findOrFail($id);
        $propulsion->delete();

        return  $this->propulsion()->with('message', 'Moyen de Propulsion suprimer');
    }
    // -----------------------------------------------------------------  //




    // ----------------------  porte-bagages  ------------------------- //
    public function porteBagages()
    {
        $portebagages = LuggageRack::all();
        $data = [
            'title' => 'Porte Bagages'
        ];
        return view('admin.custom.portebagage', $data, compact('portebagages'));
    }

    //  delete 
    public function deletePorteBagage($id)
    {
        $portebagage = LuggageRack::findOrFail($id);
        $portebagage->delete();

        return  $this->porteBagages()->with('message', 'Porte Bagage suprimer');
    }
    // -----------------------------------------------------------------  //




    // -----------------------  guidon   ---------------------------------- //
    public function guidon()
    {
        $guidons = Handle::all();
        $data = [
            'title' => 'Guidon'
        ];


        return view('admin.custom.guidon', $data, compact('guidons'));
    }

    //  delete 
    public function deleteguidon($id)
    {
        $guidon = Handle::findOrFail($id);
        $guidon->delete();

        return  $this->guidon()->with('message', 'Guidon suprimer');
    }
    // -----------------------------------------------------------------  //

    // -----------------------  poignée  ------------------------------------ // 
    public function poignee()
    {
        $poignees = Handlebars::all();
        $data = [
            'title' => 'Poignée'
        ];
        return view('admin.custom.poignee', $data, compact('poignees'));
    }

    //  delete 
    public function deletepoignee($id)
    {
        $poignee = Handlebars::findOrFail($id);
        $poignee->delete();

        return  $this->poignee()->with('message', 'Poignée suprimer');
    }
    // -----------------------------------------------------------------  //

    // --------------------- cadre  ------------------------------------ //
    public function cadre()
    {
        $cadres = Frame::all();
        $data = [
            'title' => 'Cadre'
        ];

        return view('admin.custom.cadre', $data, compact('cadres'));
    }
    //  delete 
    public function deleteCadre($id)
    {
        $cadre = Frame::findOrFail($id);
        $cadre->delete();

        return  $this->cadre()->with('message', 'Cadre suprimer');
    }

    // ----------------------------------------------------------------------- //

}
