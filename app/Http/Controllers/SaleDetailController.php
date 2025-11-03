<?php

namespace App\Http\Controllers;

use App\Models\SaleDetail;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    /**
     * Mostrar todos los detalles de ventas.
     */
    public function index()
    {
        $details = SaleDetail::all();
        return response()->json($details);
    }

    /**
     * Mostrar el formulario para crear un nuevo detalle (si usas vistas Blade).
     */
    public function create()
    {
        return view('sale_details.create');
    }

    /**
     * Guardar un nuevo detalle de venta en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sale_id'    => 'required|integer|exists:sales,id',
            'product_id' => 'required|integer|exists:products,id',
            'quantity'   => 'required|integer|min:1',
            'subtotal'   => 'required|numeric|min:0',
        ]);

        $detail = SaleDetail::create($request->all());

        return response()->json([
            'message' => 'Detalle de venta registrado correctamente',
            'sale_detail' => $detail
        ], 201);
    }

    /**
     * Mostrar un detalle de venta específico.
     */
    public function show(SaleDetail $saleDetail)
    {
        return response()->json($saleDetail);
    }

    /**
     * Mostrar el formulario para editar un detalle de venta (si usas vistas Blade).
     */
    public function edit(SaleDetail $saleDetail)
    {
        return view('sale_details.edit', compact('saleDetail'));
    }

    /**
     * Actualizar un detalle de venta existente.
     */
    public function update(Request $request, SaleDetail $saleDetail)
    {
        $request->validate([
            'sale_id'    => 'sometimes|required|integer|exists:sales,id',
            'product_id' => 'sometimes|required|integer|exists:products,id',
            'quantity'   => 'sometimes|required|integer|min:1',
            'subtotal'   => 'sometimes|required|numeric|min:0',
        ]);

        $saleDetail->update($request->all());

        return response()->json([
            'message' => 'Detalle de venta actualizado correctamente',
            'sale_detail' => $saleDetail
        ]);
    }

    /**
     * Eliminar un detalle de venta.
     */
    public function destroy(SaleDetail $saleDetail)
    {
        $saleDetail->delete();

        return response()->json([
            'message' => 'Detalle de venta eliminado correctamente'
        ]);
    }
}
