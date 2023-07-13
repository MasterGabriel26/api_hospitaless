<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();

        return response()->json($pacientes);
    }

    public function create(Request $request)
    {
        $paciente = Paciente::create($request->all());

        return response()->json($paciente, 201);
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);

        return response()->json($paciente);
    }

    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());

        return response()->json($paciente);
    }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return response()->json(null, 204);
    }
}