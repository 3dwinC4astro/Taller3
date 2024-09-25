<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();  // Obtener todas las mascotas
        return view('mascotas.index', compact('mascotas'));  // Retornar la vista con las mascotas
    }

    public function create()
    {
        return view('mascotas.create');  // Mostrar formulario para crear nueva mascota
    }

    public function store(Request $request)
    {
        Mascota::create($request->validate([
            'Nombre' => 'required|string|max:255',
            'Raza' => 'required|string|max:255',
            'Género' => 'required|string|max:255',
            'NombreDueño' => 'required|string|max:255',
            'telefonoDueño' => 'required|string|max:15',
        ]));
        
        return redirect()->route('mascotas.index')->with('success', 'Mascota creada exitosamente.');
    }

    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));  // Mostrar formulario para editar mascota
    }

    public function update(Request $request, Mascota $mascota)
    {
        $mascota->update($request->validate([
            'Nombre' => 'required|string|max:255',
            'Raza' => 'required|string|max:255',
            'Género' => 'required|string|max:255',
            'NombreDueño' => 'required|string|max:255',
            'telefonoDueño' => 'required|string|max:15',
        ]));
        
        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada exitosamente.');
    }

    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route('mascotas.index')->with('success', 'Mascota eliminada exitosamente.');
    }
}
