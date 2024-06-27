<!-- resources/views/pets/show.blade.php -->
<x-app-layout>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <!-- Sección para la imagen -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                @if($pet->imagen)
                    <img src="{{ asset('storage/' . $pet->imagen) }}" alt="{{ $pet->nombre }}" class="mx-auto" style="width: 35%;">
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default" class="mx-auto" style="width: 35%;">
                @endif
            </div>

            <!-- Detalles de la Mascota -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 w-full">
                <h2 class="text-2xl font-bold mb-4">{{ $pet->nombre }}</h2>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Descripción</h3>
                    <p>{{ $pet->descripcion }}</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">Edad</h3>
                    <p>{{ $pet->edad }} años</p>
                </div>

                <div class="mt-4">
                    <a href="{{ route('pets.index') }}" class="text-blue-500">Volver al listado</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
