<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Mostrar todos los detalles de ventas.
     */
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function buyProduct(Product $product)
    {
        $saleDetails = [
            'quantity'   => 1,
            'product_id' => $product->id,
            'unit_price' => $product->price,
            'subtotal'   => $product->price * 1,
        ];

        $saleData = [
            'user_id' => Auth::id(),
            'sale_date' => now(),
            'total' => $product->price
        ];

        $sale = Sale::create($saleData);

        $saleDetails['sale_id'] = $sale->id;
        SaleDetail::create($saleDetails);

        $product->stock -= 1;
        $product->save();

        return redirect()->route('welcome')->with('message', 'Producto comprado correctamente.');
    }
}
