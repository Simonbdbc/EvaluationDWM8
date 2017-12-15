<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\Taste;


class CreateController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        $tastes = Taste::all();
        return view('create', ['colors' => $colors, 'tastes' => $tastes]);
    }
}
