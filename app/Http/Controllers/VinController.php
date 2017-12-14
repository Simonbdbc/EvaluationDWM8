<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin;
use App\Stock;
use App\Producteur;

class VinController extends Controller
{
    public function insertOne(Request $request)
    {
        dd('$vin');
        $vin = new Vin;
        $vin->name = $request->name;
        $vin->year = $request->year;
        $vin->color = $request->color;
        $vin->region = $request->region;
        $vin->stock_id = $request->stock;
        $vin->save();
        $vin->producteurs()->attach($request->producteur);
        return redirect('/');
    }
    public function deleteOne(Request $request, $id)
    {
        $vin = Vin::find($id);
        $vin->producteurs()->detach();
        $vin->delete();
        return redirect('/');
        
    }
    public function updateOne(Request $request, $id)
    {

        $vin = Vin::find($id);
        $stocksAll = Stock::all();
        $stocks = [];
        foreach ($stocksAll as $value) {
        $stocks[$value->id] = $value->stock;
    }
        $producteursAll = Producteur::all();
        $producteurs = [];
        foreach ($producteursAll as $value) {
        $producteurs[$value->id] = $value->producteur;
    }
        
        return view('update', ['stocks' => $stocks, 'producteurs' => $producteurs, 'vin' => $vin]);
        
    }
    public function updateOneAction(Request $request)
    {
        $vin = Vin::find($request->id);
        $vin->name = $request->name;
        $vin->year = $request->year;
        $vin->color = $request->color;
        $vin->region = $request->region;
        $vin->stock_id = $request->stock;
        $vin->save();
        $vin->producteurs()->detach();
        $vin->producteurs()->attach($request->producteur);
        return redirect('/');

    }
}
