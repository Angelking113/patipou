<x-app-layout>
<div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <!-- Sección para la imagen principal -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <img src="{{ asset('images/donas.jpeg') }}" alt="Poli Huellas" class="mx-auto" style="width: 35%;">
            </div>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <h1 class="text-2xl font-semibold">Apoya nuestra causa</h1>
                <p class="mt-4 text-lg text-gray-600">Tu donación ayudará a los animalitos sin hogar.</p>

                <!-- Formulario de donación básico -->
                <form action="{{ route('donar.procesar') }}" method="POST">
                    @csrf
                    <div class="mt-6">
                        <label for="name" class="block text-gray-700">Nombre</label>
                        <input type="text" name="name" id="name" value="" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mt-6">
                        <label for="email" class="block text-gray-700">Correo electrónico</label>
                        <input type="email" name="email" id="email" value="" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mt-6">
                        <label for="amount" class="block text-gray-700">Monto</label>
                        <input type="number" name="amount" id="amount" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <button type="submit" class="mt-6 px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">
                        Donar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
