<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarruselController extends Controller
{
    public function showCarrusel()
    {
        return view('carrusel');
    }
}
