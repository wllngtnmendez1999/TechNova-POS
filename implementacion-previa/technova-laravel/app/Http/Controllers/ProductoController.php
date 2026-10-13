<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'descripcion' => 'required',
            'categoria' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'fecha_actualizacion' => now()
        ]);

        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'fecha_actualizacion' => now()
        ]);

        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        Producto::destroy($id);

        return redirect()->route('productos.index');
    }
}
