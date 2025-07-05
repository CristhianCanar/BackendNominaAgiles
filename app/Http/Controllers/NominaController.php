<?php

namespace App\Http\Controllers;

use App\Models\Nomina;
use Illuminate\Http\Request;

class NominaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Nomina::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'user_id' => 'required|exists:users,id',
                'dias_laborados' => 'required|integer|min:0',
                'horas_extras' => 'nullable|integer|min:0'
            ]);

            $nomina = Nomina::create($validated);
            return response()->json($nomina, 201);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }

    }

    public function show(string $id)
    {
        return Nomina::findOrFail($id);
    }

    /**
     * Display the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
