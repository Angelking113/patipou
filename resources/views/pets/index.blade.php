<!-- resources/views/pets/index.blade.php -->
<x-app-layout>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <!-- Sección para la imagen -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <img src="{{ asset('images/mascooo.jpeg') }}" alt="Poli Huellas" class="mx-auto" style="width: 35%;">
            </div>

            <!-- Listado de Mascotas -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 w-full">
                <h2 class="text-2xl font-bold mb-4">Listado de Mascotas</h2>

                <a href="{{ route('pets.create') }}" class="text-blue-500 mb-4">Agregar Mascota</a>

                <!-- Tabla de mascotas -->
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Imagen</th>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Descripción</th>
                            <th class="px-4 py-2">Edad</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pets as $pet)
                            <tr>
                                <td class="border px-4 py-2">
                                    @if($pet->imagen)
                                        <img src="{{ asset('storage/' . $pet->imagen) }}" alt="{{ $pet->nombre }}" class="w-24 h-24 object-cover rounded-full">
                                    @else
                                        <img src="{{ asset('images/default.jpg') }}" alt="Default" class="w-24 h-24 object-cover rounded-full">
                                    @endif
                                </td>
                                <td class="border px-4 py-2">{{ $pet->nombre }}</td>
                                <td class="border px-4 py-2">{{ $pet->descripcion }}</td>
                                <td class="border px-4 py-2">{{ $pet->edad }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('pets.show', $pet) }}" class="text-blue-500">Ver</a>
                                    <a href="{{ route('pets.edit', $pet) }}" class="text-yellow-500">Editar</a>
                                    <form action="{{ route('pets.destroy', $pet) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
