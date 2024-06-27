<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class StripeController extends Controller
{
    public function index()
    {
        return view('donar');
    }

    public function procesarDonacion(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1',
        ]);

        // Crear una nueva instancia de Donation
        $donation = new Donation();
        $donation->name = $request->input('name');
        $donation->email = $request->input('email');
        $donation->amount = $request->input('amount');
       
        // Guardar el registro en la base de datos
        $donation->save();

        // Redirigir o devolver una respuesta adecuada
        return redirect()->route('donar')->with('success', '¡Tu información de donación ha sido registrada correctamente!');
    }
}
