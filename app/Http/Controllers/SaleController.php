<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class SaleController extends Controller
{
    /**
     * Mostrar todas las ventas.
     */
    public function index()
    {
        $sales = Sale::all();
        $products = Product::all();
        return view('sales.index', compact('sales', 'products'));
    }

    /**
     * Mostrar el formulario para crear una nueva venta (si usas vistas Blade).
     */
    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    /**
     * Guardar una nueva venta en la base de datos.
     */
    public function store(Request $request)
    {
        $product = Product::find($request['product_id']);

        $saleDetails = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity'   => 'required|integer|min:1',
        ]);

        $saleDetails['unit_price'] = $product->price;
        $saleDetails['subtotal'] = $product->price * $request['quantity'];
        
        $saleData = [
            'user_id' => Auth::id(),
            'sale_date' => now(),
            'total' => $product->price * $request['quantity']
        ];
        
        $sale = Sale::create($saleData);
        
        $saleDetails['sale_id'] = $sale->id;
        SaleDetail::create($saleDetails);

        return redirect()->route('sales.index')->with('message', 'Venta creada correctamente.');
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

        $saleDetails = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
        ]);


        $sale->update($saleDetails);

        return redirect()->route('sales.index')->with('message', 'Venta actualizada correctamente.');

    }

    /**
     * Eliminar una venta.
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();

        return redirect()->route('sales.index')->with('message', 'Venta eliminada correctamente.');
    }
}
