<x-app-layout>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <img src="{{ asset('images/mascooo.jpeg') }}" alt="Poli Huellas" class="mx-auto" style="width: 35%;">
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 w-full">
                <h2 class="text-2xl font-bold mb-4">Agregar Mascota</h2>

                <form method="POST" action="{{ route('pets.store') }}" enctype="multipart/form-data" class="mb-4">
                    @csrf

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Ingrese el nombre">
                        </div>
                        <div class="mb-4">
                            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Ingrese la descripción">
                        </div>
                        <div class="mb-4">
                            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
                            <input type="file" name="imagen" id="imagen" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="edad" class="block text-sm font-medium text-gray-700">Edad</label>
                            <input type="number" name="edad" id="edad" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Ingrese la edad">
                        </div>
                        <!-- Agregar más campos según tus necesidades -->
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
