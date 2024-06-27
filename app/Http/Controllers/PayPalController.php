<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation; // Asegúrate de importar el modelo de Donación
use Illuminate\Support\Facades\Mail;
use App\Mail\DonationConfirmation; // Importa la clase del correo de confirmación

class PayPalController extends Controller
{
    public function checkout(Request $request)
    {
        // Validación de los datos recibidos
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|numeric',
        ]);

        // Guardar la información en la base de datos
        $donation = new Donation();
        $donation->name = $request->input('name');
        $donation->email = $request->input('email');
        $donation->amount = $request->input('amount');
        $donation->save();

        // Enviar el correo de confirmación
        Mail::to($request->input('email'))->send(new DonationConfirmation($donation));

        // Retornar una vista de confirmación (pantalla)
        return view('paypal.confirmation', ['donation' => $donation]);
    }
}
