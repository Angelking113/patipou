<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        return view('donaciones');
    }

    public function processDonation(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1',
        ]);

        // Crear una nueva instancia de Donation (guardando datos falsos)
        $donation = new Donation();
        $donation->name = 'Nombre Falso';
        $donation->email = 'falso@example.com';
        $donation->amount = $request->input('amount');
       
        // Guardar el registro en la base de datos
        $donation->save();

        // Redirigir o devolver una respuesta adecuada
        return view('donation.confirmation', ['donation' => $donation]);
    }
}
