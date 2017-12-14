<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vin as Vin;

class HomeController extends Controller
{
    public function index()
    {
        $vins = Vin::all();
        return view('home', ['vins' => $vins]);
    }
}
