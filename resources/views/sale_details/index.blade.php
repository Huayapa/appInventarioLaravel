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
            <a href="{{ route('sale_details.create') }}" class="btn-create">+ Crear Detalle</a>
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $saleDetail)
                <tr>
                    <td>1</td>
                    <td>12</td>
                    <td>8</td>
                    <td>3</td>
                    <td>S/ 25.00</td>
                    <td>S/ 75.00</td>
                    <td>
                        <a href="{{ route('sale_details.edit', $saleDetail) }}" class="btn-edit">Editar</a>
                        <form action="{{ route('sale_details.destroy', $saleDetail) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('¿Eliminar este detalle de venta?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
