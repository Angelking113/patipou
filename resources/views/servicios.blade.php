<x-app-layout>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <!-- Sección para la imagen servici.jpeg -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <img src="{{ asset('images/servici.jpeg') }}" alt="Poli Huellas" class="mx-auto" style="width: 35%;">
            </div>

            <!-- Sección de Servicios en dos filas -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 w-full flex flex-wrap justify-center">
                <!-- Primer Cuadro de Servicio -->
                <div class="flex flex-col items-center w-full sm:w-1/2 md:w-auto p-4">
                    <a href="{{ url('productos') }}">
                        <img src="{{ asset('images/servi1.jpeg') }}" alt="Servicio 1" class="mx-auto" style="max: 300px; height: 150px; object-fit: cover;">
                    </a>
                    <p class="text-lg text-gray-900 leading-relaxed mt-4 text-center" style="font-family: 'Arial', sans-serif;">
                        Productos que vendemos en Patipou, puedes preguntar por ellos.
                    </p>
                </div>
                
                <!-- Segundo Cuadro de Servicio -->
                <div class="flex flex-col items-center w-full sm:w-1/2 md:w-auto p-4">
                    <a href="{{ url('pets') }}">
                        <img src="{{ asset('images/servi2.jpeg') }}" alt="Servicio 2" class="mx-auto" style="width: 300px; height: 150px; object-fit: cover;">
                    </a>
                    <p class="text-lg text-gray-900 leading-relaxed mt-4 text-center" style="font-family: 'Arial', sans-serif;">
                        Puedes dar en adopción a tus mascotas :(.
                    </p>
                </div>

                <!-- Tercer Cuadro de Servicio -->
                <div class="flex flex-col items-center w-full sm:w-1/2 md:w-auto p-4">
                    <a href="{{ url('pets') }}">
                        <img src="{{ asset('images/servi3.jpeg') }}" alt="Servicio 3" class="mx-auto" style="width: 300px; height: 150px; object-fit: cover;">
                    </a>
                    <p class="text-lg text-gray-900 leading-relaxed mt-4 text-center" style="font-family: 'Arial', sans-serif;">
                        Puedes encontrar acá al animalito que sea tu pata.
                    </p>
                </div>
                
                <!-- Cuarto Cuadro de Servicio -->
                <div class="flex flex-col items-center w-full sm:w-1/2 md:w-auto p-4">
                    <a href="{{ url('donaciones') }}">
                        <img src="{{ asset('images/donassss.jpeg') }}" alt="Servicio 4" class="mx-auto" style="width: 300px; height: 150px; object-fit: cover;">
                    </a>
                    <p class="text-lg text-gray-900 leading-relaxed mt-4 text-center" style="font-family: 'Arial', sans-serif;">
                        Realiza una donación para apoyar al refugio.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
