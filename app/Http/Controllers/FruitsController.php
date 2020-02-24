<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit;

class FruitsController extends Controller
{
    public function index (){
        $fruits=Fruit::all();
        return view ("welcome", compact('fruits'));
    }
    public function create(){
        return view ("ajoutFruits");
    }
    public function store(Request $request){
        // dd($request);
        $fruit= new Fruit();
        $fruit->nom=$request->input("nom");
        $fruit->quantite=$request->input("quantite");
        $fruit->prix=$request->input("prix");
        $fruit->save();
        return redirect()->route("welcome");
    }
    public function edit($id){
        $fruit=Fruit::find($id); 
        return view ("modifier", compact("fruit"));
    }
    public function update(Request $request, $id){
        $fruit=Fruit::find($id);
        $fruit->nom=$request->input("nom");
        $fruit->quantite=$request->input("quantite");
        $fruit->prix=$request->input("prix");
        $fruit->save();
        return redirect()->route("welcome");

    }
    public function destroy($id){
        $fruit = Fruit::find($id);
        $fruit->delete();
        return redirect()-> route("welcome");
    }

    //
}
