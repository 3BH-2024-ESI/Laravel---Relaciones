<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizzero;
class PizzeroController extends Controller
{
    // listar todos los pizzeros
    public function Listar()
    {
        $pizzeros = Pizzero::all();
        return $pizzeros;
    }

    // guardar un pizzero
    public function Guardar(Request $request)
    {
        $pizzero = new Pizzero();
        $pizzero->nombre = $request->nombre;
        $pizzero->apellido = $request->apellido;
        $pizzero->save();
        return $pizzero;
    }

    // buscar un pizzero 
    public function Buscar($id)
    {
        $pizzero = Pizzero::findOrFail($id);
        return $pizzero;
    }
}
