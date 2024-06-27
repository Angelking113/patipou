<!-- resources/views/paypal/confirmation.blade.php -->
<x-app-layout>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <h1 class="text-2xl font-semibold">Confirmación de Información</h1>
                <p class="mt-4 text-lg text-gray-600">Gracias por proporcionar los detalles de tu donación.</p>
                <p class="mt-4 text-lg text-gray-600">A continuación se muestra un resumen de la información que has ingresado:</p>
                <ul class="mt-4 text-lg text-gray-600">
                    <li><strong>Nombre:</strong> {{ $donation->name }}</li>
                    <li><strong>Correo Electrónico:</strong> {{ $donation->email }}</li>
                    <li><strong>Cantidad Donada:</strong> ${{ $donation->amount }}</li>
                </ul>
                <p class="mt-4 text-lg text-gray-600">Se ha enviado una confirmación al correo proporcionado. Gracias por tu interés en apoyar nuestra causa.</p>
            </div>
        </div>
    </div>
</x-app-layout>
