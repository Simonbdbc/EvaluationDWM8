<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Producteur;


class CreateController extends Controller
{
    public function index()
    {
        
        $stocks = Stock::all();
        $producteurs = Producteur::all();
        return view('create', ['stocks' => $stocks, 'producteurs' => $producteurs]);
    }
}
