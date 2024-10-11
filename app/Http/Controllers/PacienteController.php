<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;


class PacienteController extends Controller
{

    public function index()
    {
        $pacientes = Paciente::all();
        return view(
            view: 'pacientes.index',
            data: ['pacientes' => $pacientes]
        );
    }


    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'edad' => 'required|integer',
            'numero_contacto' => 'required|max:20',
            'direccion' => 'required',
            'email' => 'required|email',
            'tipo_de_tratamiento' => 'required',
        ]);

        Paciente::create(attributes: $validatedData);

        return redirect()->route(route: 'pacientes.index')->with('success', 'Paciente creado exitosamente.');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }



    public function destroy(string $id)
    {
        //
    }
}
