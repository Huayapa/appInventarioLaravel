<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Mostrar todos los productos.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Mostrar el formulario para crear un nuevo producto (si usas vistas).
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Guardar un nuevo producto en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric'
        ]);

        $product = Product::create($request->all());

        return redirect()->route('products.index')->with('message', 'Producto creado correctamente');
    }

    /**
     * Mostrar un producto específico.
     */
    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Mostrar el formulario para editar un producto (si usas vistas).
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Actualizar un producto existente.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('message', 'Producto actualizado correctamente');
    }

    /**
     * Eliminar un producto.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('message', 'Producto eliminado correctamente');

    }
}
