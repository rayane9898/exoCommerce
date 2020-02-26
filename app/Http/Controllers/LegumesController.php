<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Legume;

class LegumesController extends Controller
{
    public function index (){
        $legumes= Legume::all();
        return view ("legumes", compact('legumes'));
    }
    public function create(){
        return view("ajoutLegumes");
    }
    Public function store(Request $request){

        $legume= new Legume();
        $legume->nom=$request->input("nom");
        $legume->quantite=$request->input("quantite");
        $legume->prix=$request->input("prix");
        $legume->save();
        return redirect()->route("legumes");
    }
    public function edit($id){
        $legume=Legume::find($id);
        return view ("modifierLegume", compact("legume"));
    }
    public function update(Request $request, $id){
        $legume=Legume::find($id);
            $legume->nom=$request->input("nom");
            $legume->quantite=$request->input("quantite");
            $legume->prix=$request->input("prix");
            $legume->save();
            return redirect()->route("legumes");
 
    }
    public function destroy($id){
        $legume = Legume::find($id);
        $legume->delete();
        return redirect()->route("legumes");
    }
    //
}
