<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Ventas</title>
    @vite(['resources/css/index_ventas.css'])
</head>
<body>
    <div class="ventas-container">
        <div class="header">
            <h1>Listado de Ventas</h1>
            <div style="display: flex; gap: 10px;">
                <a href="{{ route('sales.create') }}" class="btn-create">+ Crear Venta</a>
                <a href="{{ route('dashboard') }}" class="btn-delete" style="text-decoration: none;">← Volver</a>
            </div>
        </div>

        <table class="ventas-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Fecha de Venta</th>
                    <th>Total (S/)</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>
                            {{-- Mostrar el nombre del usuario, si existe --}}
                            {{ $sale->user ? $sale->user->name : 'Sin usuario' }}
                        </td>
                        <td>{{ $sale->sale_date }}</td>
                        <td>{{ number_format($sale->total, 2, '.', ',') }}</td>
                        <td>
                            <a href="{{ route('sales.edit', $sale) }}" class="btn-edit">Editar</a>
                            <form action="{{ route('sales.destroy', $sale) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('¿Eliminar esta venta?')">
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
