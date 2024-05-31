<x-app-layout>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <!-- Sección para la imagen patipouu.png -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <img src="{{ asset('images/patipouu.png') }}" alt="Poli Huellas" class="mx-auto" style="width: 60%;">
            </div>
            <!-- Sección para el texto y la imagen mascotass.png -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex items-center justify-center space-x-8">
                    <p class="text-lg text-gray-700 mr-4">
                        <p>La páginas que buscabas para encontrar a tu mascota ideal, tambien podrás dar en adopcion cualquier animalito que encuentres y no lo dejes abandonado, le daremos hogar a tu animalito, todos merecen un hogar.</p>
                    </p>
                    <img src="{{ asset('images/mascotass.png') }}" alt="Mascotas" style="width: 50%;">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
