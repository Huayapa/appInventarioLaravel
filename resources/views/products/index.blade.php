<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    @vite(['resources/css/productos.css'])
</head>

<body>
    <div class="ventas-container">
        <div class="ventas-header">
            <h1>Productos</h1>
            <a href="{{ route('products.create') }}" class="btn-create">+ Crear Producto</a>
        </div>

        <div class="ventas-table-container">
            <table class="ventas-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio (S/)</th>
                        <th>Stock</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>S/. {{ number_format($product->price, 2, '.', ',') }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product) }}" class="btn-edit">Editar</a>

                                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-delete"
                                        onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Aquí iría el foreach con tus datos reales -->
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
