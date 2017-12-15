<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bottle as Bottle;

class BaseController extends Controller
{
    public function index()
    {
        $bottles = Bottle::all();
        return view('home');
    }
    public function read()
    {
        $bottles = Bottle::all();
        return view('read', ['bottles' => $bottles]);
    }
}
