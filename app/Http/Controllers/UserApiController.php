<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class UserApiController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        try {
            $users = User::create([
                "nombres" => $request->nombres,
                "apellidos" => $request->apellidos,
                "salario_base" => $request->salario_base,
                "fecha_salida" => $request->fecha_salida,
                "fecha_ingreso" => $request->fecha_ingreso,
                "tipo_contrato" => $request->tipo_contrato,
                "email" => rand(100, 999) . "@gmail.com",
                "password" => rand(100, 999) . ".com",
            ]);
            return response()->json($users);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());

        }


    }
}
