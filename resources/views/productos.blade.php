<!-- resources/views/productos.blade.php -->
<x-app-layout>
    <div class="py-12 bg-purple-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col items-center space-y-8">
            <!-- Sección para la imagen principal -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-12">
                <img src="{{ asset('images/product.png') }}" alt="Poli Huellas" class="mx-auto" style="width: 35%;">
            </div>

            <!-- Sección de Productos -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                <!-- Producto 1 -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 flex flex-col items-center">
                    
                        <img src="{{ asset('images/product1.jpeg') }}" alt="Producto 1" class="w-48 h-48 object-cover">
                    
                    <p class="mt-4 text-lg font-semibold">CORREAS</p>
                    <p class="mt-2 text-sm text-gray-600">Tenemos correas para todos sus animales.</p>
                </div>

                <!-- Producto 2 -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 flex flex-col items-center">
                    
                        <img src="{{ asset('images/product2.jpeg') }}" alt="Producto 2" class="w-48 h-48 object-cover">
                    
                    <p class="mt-4 text-lg font-semibold">CAMITAS</p>
                    <p class="mt-2 text-sm text-gray-600">Todo tipo de camas de todos los tamaños ded todos los colores.</p>
                </div>

                <!-- Producto 3 -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 flex flex-col items-center">
                    
                        <img src="{{ asset('images/product3.jpeg') }}" alt="Producto 3" class="w-48 h-48 object-cover">
                    
                    <p class="mt-4 text-lg font-semibold">CROQUETAS</p>
                    <p class="mt-2 text-sm text-gray-600">Galletitas para todos los tipos de animales, tamaño, raza, edad.</p>
                </div>

                <!-- Producto 4 -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 flex flex-col items-center">
                    
                        <img src="{{ asset('images/product4.jpeg') }}" alt="Producto 4" class="w-48 h-48 object-cover">
                    
                    <p class="mt-4 text-lg font-semibold">CAJAS PARA GATOS</p>
                    <p class="mt-2 text-sm text-gray-600">Para nadie es un secreto que los gatos aman las cajas no?
                    </p>
                </div>

                <!-- Producto 5 -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 flex flex-col items-center">
                    
                        <img src="{{ asset('images/product5.jpeg') }}" alt="Producto 5" class="w-48 h-48 object-cover">
                    
                    <p class="mt-4 text-lg font-semibold">JAULAS</p>
                    <p class="mt-2 text-sm text-gray-600">Si tienes un lorito, escoge una jaula grande para la comodidad de tu aludo.</p>
                </div>

                <!-- Producto 6 -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 flex flex-col items-center">
                    
                        <img src="{{ asset('images/product6.jpeg') }}" alt="Producto 6" class="w-48 h-48 object-cover">
                    
                    <p class="mt-4 text-lg font-semibold">CEPILLOS</p>
                    <p class="mt-2 text-sm text-gray-600">Cepillos para todos los tipos de pelaje de tus mascotas.</p>
                </div>

                <!-- Producto 7 -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 flex flex-col items-center">
                
                        <img src="{{ asset('images/product7.jpeg') }}" alt="Producto 7" class="w-48 h-48 object-cover">
                    
                    <p class="mt-4 text-lg font-semibold">GPS</p>
                    <p class="mt-2 text-sm text-gray-600">Correas con GPS incorporado en Colaboracion con PetPath.</p>
                </div>

                <!-- Producto 8 -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 flex flex-col items-center">
                        <img src="{{ asset('images/product8.jpeg') }}" alt="Producto 8" class="w-48 h-48 object-cover">
                    
                    <p class="mt-4 text-lg font-semibold">CONTACTANOS PARA ADQUIRIRLOS</p>
                    <p class="mt-2 text-sm text-gray-600">puedes contactarnos para comprar alguno de nuestros productos, que son de la mejor calidad, y encontraras el complemento perfecto para la adopcion de tu nuevo amigo.<li>WHATSAPP: 925281659</li><li>Facebook: PATIPOU</li><li>INSTAGRAM: PATIPOU</li></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
