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
            <a href="/ventas/crear" class="btn-create">+ Crear Venta</a>
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
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>2025-11-03 10:00</td>
                    <td>250.00</td>
                    <td>
                        <a href="/ventas/edit" class="btn-edit">Editar</a>
                        <button class="btn-delete">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>María López</td>
                    <td>2025-11-02 17:45</td>
                    <td>125.50</td>
                    <td>
                        <a href="/ventas/edit" class="btn-edit">Editar</a>
                        <button class="btn-delete">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
