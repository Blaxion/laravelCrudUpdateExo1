<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        $animals = Animal::all();
        return view('animals',compact('animals'));
    }

    // Create
    public function create(){
        return view('pages.createAnimal');
    }
    public function store(Request $request){
        $store = new Animal;
        $store->species = $request->species;
        $store->age =$request->age; 
        $store->save();
        return redirect('/createAnimal');
    }

    // Read
    public function show($id){
        $show = Animal::find($id);
        return  view('pages.showAnimal',compact('show'));
    }

    // Update
    public function edit($id){
        $edit = Animal::find($id);
        return  view('pages.editAnimal',compact('edit'));
    }
    public function update($id , Request $request){
        $update = Animal::find($id);
        $update->species = $request->species;
        $update->age = $request->age; 
        $update->save();
        return redirect('/');
    }

    // Delete
    public function destroy($id){
        $destroy = Animal::find($id);
        $destroy->delete();
        return redirect('/');
        
    }
}
