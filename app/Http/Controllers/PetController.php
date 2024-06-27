<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller {
    // Método para listar todos los animales
    public function index()
    {
        $pets = Pet::all(); // Obtiene todos los modelos de mascotas

        // También puedes pasar la colección a la vista
        return view('pets.index', compact('pets'));
    }

    // Método para mostrar el formulario de creación
    public function create() {
        return view('pets.create');
    }

    // Método para almacenar un nuevo animal
    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'edad' => 'required|integer',
            'imagen' => 'nullable|image',
        ]);

        $pet = new Pet($request->all());
        if ($request->hasFile('imagen')) {
            $pet->imagen = $request->file('imagen')->store('imagenes', 'public');
        }
        $pet->save();

        return redirect()->route('pets.index');
    }

    // Método para mostrar un animal específico
    public function show(Pet $pet) {
        return view('pets.show', compact('pet'));
    }

    // Método para mostrar el formulario de edición
    public function edit(Pet $pet) {
        return view('pets.edit', compact('pet'));
    }

    // Método para actualizar un animal específico
    public function update(Request $request, Pet $pet) {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'edad' => 'required|integer',
            'imagen' => 'nullable|image',
        ]);

        $pet->fill($request->all());
        if ($request->hasFile('imagen')) {
            $pet->imagen = $request->file('imagen')->store('imagenes', 'public');
        }
        $pet->save();

        return redirect()->route('pets.index');
    }

    // Método para eliminar un animal específico
    public function destroy(Pet $pet) {
        $pet->delete();
        return redirect()->route('pets.index');
    }
}
