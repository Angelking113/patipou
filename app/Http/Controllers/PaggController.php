<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaggController extends Controller
{
    public function productos()
    {
        // Logic for handling the productos route
        return view('productos'); // Example: Return a view named 'productos'
    }

    public function mascotas()
    {
        // Logic for handling the mascotas route
        return view('mascotas'); // Example: Return a view named 'mascotas'
    }

    public function donaciones()
    {
        // Logic for handling the donaciones route
        return view('donaciones'); // Example: Return a view named 'donaciones'
    }
}
