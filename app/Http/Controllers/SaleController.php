<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Mostrar todas las ventas.
     */
    public function index()
    {
        $sales = Sale::all();
        return response()->json($sales);
    }

    /**
     * Mostrar el formulario para crear una nueva venta (si usas vistas Blade).
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Guardar una nueva venta en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity'   => 'required|integer|min:1',
            'total'      => 'required|numeric|min:0',
            'date'       => 'required|date',
        ]);

        $sale = Sale::create($request->all());

        return response()->json([
            'message' => 'Venta registrada correctamente',
            'sale' => $sale
        ], 201);
    }

    /**
     * Mostrar una venta específica.
     */
    public function show(Sale $sale)
    {
        return response()->json($sale);
    }

    /**
     * Mostrar el formulario para editar una venta (si usas vistas Blade).
     */
    public function edit(Sale $sale)
    {
        return view('sales.edit', compact('sale'));
    }

    /**
     * Actualizar una venta existente.
     */
    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'product_id' => 'sometimes|required|integer|exists:products,id',
            'quantity'   => 'sometimes|required|integer|min:1',
            'total'      => 'sometimes|required|numeric|min:0',
            'date'       => 'sometimes|required|date',
        ]);

        $sale->update($request->all());

        return response()->json([
            'message' => 'Venta actualizada correctamente',
            'sale' => $sale
        ]);
    }

    /**
     * Eliminar una venta.
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();

        return response()->json([
            'message' => 'Venta eliminada correctamente'
        ]);
    }
}
