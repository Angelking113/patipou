<!-- resources/views/nosotros.blade.php -->
<x-app-layout>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <!-- Sección para la imagen -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <img src="{{ asset('images/nosotro.jpeg') }}" alt="Patipou" class="mx-auto" style="width: 35%;">
            </div>

            <!-- Sección de Descripción -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 w-full">
                <h2 class="text-3xl font-bold mb-4 text-center" style="font-family: 'Arial', sans-serif;"></h2>
                <p class="text-lg text-gray-900 leading-relaxed" style="font-family: 'Arial', sans-serif;">
                    Bienvenidos a Patipou, un refugio dedicado al bienestar y la adopción de animales. En Patipou, nos esforzamos 
                    por proporcionar un hogar amoroso y seguro para todos los animales que necesitan un nuevo comienzo. Desde perros 
                    y gatos hasta aves y pequeñas mascotas, cada uno de ellos encuentra una segunda oportunidad aquí.
                </p>
                <p class="text-lg text-gray-900 leading-relaxed mt-4" style="font-family: 'Arial', sans-serif;">
                    Nuestra misión es promover la adopción responsable y educar a la comunidad sobre el cuidado adecuado de los 
                    animales. Trabajamos con pasión y dedicación para asegurarnos de que cada animal reciba el amor y la atención 
                    que se merece. En Patipou, cada adopción es una historia de éxito que celebramos con orgullo junto con nuestras 
                    familias adoptivas.
                </p>
                <p class="text-lg text-gray-900 leading-relaxed mt-4" style="font-family: 'Arial', sans-serif;">
                    Únete a nosotros en nuestra misión de crear un mundo donde cada animal tenga un hogar amoroso y sea tratado 
                    con respeto. Tu apoyo como adoptante, voluntario o donante es fundamental para hacer realidad nuestro sueño. 
                    Juntos, podemos marcar la diferencia en la vida de innumerables animales. ¡Gracias por ser parte de la familia 
                    Patipou!
                </p>
            </div>

            <!-- Nuevas secciones de imágenes y descripciones -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 w-full">
                <!-- Primera imagen y descripción -->
                <div class="flex items-center space-x-4 justify-center">
                    <img src="{{ asset('images/perro1.jpeg') }}" alt="Imagen 1" class="w-64 h-auto">
                </div>
                <p class="text-lg text-gray-700 leading-relaxed text-center mt-4" style="font-family: 'Open Sans', sans-serif;">
                    Si tu no puedes cuidarlo, no lo abandones en la calle, dejalo con nosotros.
                </p>

                <!-- Separador vertical -->
                <hr class="my-8">

                <!-- Segunda imagen y descripción -->
                <div class="flex items-center space-x-4 justify-center">
                    <img src="{{ asset('images/perro2.jpeg') }}" alt="Imagen 2" class="w-64 h-auto">
                </div>
                <p class="text-lg text-gray-700 leading-relaxed text-center mt-4" style="font-family: 'Open Sans', sans-serif;">
                    La adopcion es lo mejor que puedes hacer.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
