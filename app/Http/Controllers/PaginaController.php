<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    // Método para mostrar la página de productos
    public function productos()
    {
        return view('productos');
    }

    // Método para mostrar la página de un producto individual
    public function show($id)
    {
        $products = [
            1 => ['title' => 'Producto 1', 'description' => 'Descripción breve del producto 1.', 'image' => 'images/product1.jpeg'],
            2 => ['title' => 'Producto 2', 'description' => 'Descripción breve del producto 2.', 'image' => 'images/product2.jpeg'],
            3 => ['title' => 'Producto 3', 'description' => 'Descripción breve del producto 3.', 'image' => 'images/product3.jpeg'],
            4 => ['title' => 'Producto 4', 'description' => 'Descripción breve del producto 4.', 'image' => 'images/product4.jpeg'],
            5 => ['title' => 'Producto 5', 'description' => 'Descripción breve del producto 5.', 'image' => 'images/product5.jpeg'],
            6 => ['title' => 'Producto 6', 'description' => 'Descripción breve del producto 6.', 'image' => 'images/product6.jpeg'],
            7 => ['title' => 'Producto 7', 'description' => 'Descripción breve del producto 7.', 'image' => 'images/product7.jpeg'],
            8 => ['title' => 'Producto 8', 'description' => 'Descripción breve del producto 8.', 'image' => 'images/product8.jpeg'],
        ];

        if (!isset($products[$id])) {
            abort(404);
        }

        return view('products.product', ['product' => $products[$id]]);
    }
}
