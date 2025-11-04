<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Ventas</title>
    @vite(['resources/css/index_detalle_ventas.css'])
</head>
<body>
    <div class="ventas-container">
        <div class="header">
            <h1>Detalle de Ventas</h1>
            {{-- <a href="{{ route('sale_details.create') }}" class="btn-create">+ Crear Detalle</a> --}}
            <div style="display: flex; gap: 10px;">
                <a href="{{ route('dashboard') }}" class="btn-delete" style="text-decoration: none;">← Volver</a>
            </div>
        </div>

        <table class="ventas-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Venta ID</th>
                    <th>Producto ID</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    {{-- <th>Acciones</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $saleDetail)
                <tr>
                    <td>{{ $saleDetail->id }}</td>
                    <td>{{ $saleDetail->sale_id }}</td>
                    <td>{{ $saleDetail->product?->name }}</td>
                    <td>{{ $saleDetail->quantity }}</td>
                    <td>S/ {{ number_format($saleDetail->unit_price, 2) }}</td>
                    <td>S/ {{ number_format($saleDetail->subtotal, 2) }}</td>
                    {{-- <td>
                        <a href="{{ route('sale_details.edit', $saleDetail) }}" class="btn-edit">Editar</a>
                        <form action="{{ route('sale_details.destroy', $saleDetail) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('¿Eliminar este detalle de venta?')">
                                Eliminar
                            </button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
