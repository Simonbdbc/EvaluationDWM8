<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bottle;
use App\Color;
use App\Taste;

class BottleController extends Controller
{
    public function insertOne(Request $request)
    {
        $bottle = new Bottle;
        $bottle->name = $request->name;
        $bottle->year = $request->year;
        $bottle->color_id = $request->color;
        $bottle->stock = $request->stock;
        $bottle->save();
        $bottle->tastes()->attach($request->taste);
        return redirect('/read');
    }
    public function deleteOne(Request $request, $id)
    {
        $bottle = Bottle::find($id);
        $bottle->tastes()->detach();
        $bottle->delete();
        return redirect('/read');
        
    }
    public function updateOne(Request $request, $id)
    {

        $bottle = Bottle::find($id);
        $colorsAll = Color::all();
        $colors = [];
        foreach ($colorsAll as $value) {
        $colors[$value->id] = $value->color;
    }
        $tastesAll = Taste::all();
        $tastes = [];
        foreach ($tastesAll as $value) {
        $tastes[$value->id] = $value->taste;
    }
        
        return view('update', ['colors' => $colors, 'tastes' => $tastes, 'bottle' => $bottle]);
        
    }
    public function updateOneAction(Request $request)
    {
        $bottle = Bottle::find($request->id);
        $bottle->name = $request->name;
        $bottle->year = $request->year;
        $bottle->color_id = $request->color;
        $bottle->stock = $request->stock;
        $bottle->save();
        $bottle->tastes()->detach();
        $bottle->tastes()->attach($request->taste);
        return redirect('/read');

    }
}
