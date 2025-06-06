<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeFoodRequest;
use App\Model\TypeFood;
use Illuminate\Http\Request;

class TypeFoodController extends Controller
{
    public function all()
    {
        $TypeFoods=TypeFood::all();
        return view('TypeFood.all',compact('TypeFoods'));
    }
    public function create()
    {
        return view('TypeFood.create');
    }

    public function store(TypeFoodRequest $request)
    {

        TypeFood::create([
            "name" => $request->name,
        ]);
        return redirect()->route('createtypefood')->with("massege", "successfully adding new TypeFood");
    }

    /////////////////////Delete///////////////////////
    public function delete($id)
    {
        $TypeFood = TypeFood::findOrFail($id);
        $TypeFood->delete();
        return redirect()->route('createtypefood')->with("massege", "successfully deleting new Type from Food");
    }



    /////////////////////  Edit///////////////////////
    public function edit($id)
    {
        $TypeFood = TypeFood::findOrFail($id);
        return view("TypeFood.edit", ['TypeFood' => $TypeFood]);
    }



    ///////////////////// Save Edit///////////////////////


    public function save(Request $request)
    {
        $old_id = $request->id;
        $TypeFood = TypeFood::findOrFail($old_id);
        $TypeFood->update([
            'name' => $request->name,
        ]);
        return redirect()->route('createtypefood')->with("massege", "successfully updated new type food");
    }
}
