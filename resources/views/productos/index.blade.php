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
            <h1>Ventas</h1>
            <a href="{{ route('productos.create') }}" class="btn-create">+ Crear Producto</a>
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
                    <tr>
                        <td>1</td>
                        <td>Teclado Mecánico</td>
                        <td>Switches rojos, retroiluminado RGB.</td>
                        <td>150.00</td>
                        <td>10</td>
                        <td>2025-11-03</td>
                        <td>
                            <a href={{ route('productos.edit') }} class="btn-edit">Editar</a>
                            <button class="btn-delete">Eliminar</button>
                        </td>
                    </tr>
                    </tr>
                    <!-- Aquí iría el foreach con tus datos reales -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
