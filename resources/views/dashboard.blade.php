<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panel Principal</title>
    @vite(['resources/css/dashboard.css'])
</head>
<body>

    <!-- Barra superior -->
    <header class="navbar">
        <h1 class="logo">Panel Principal</h1>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Cerrar sesión</button>
        </form>
    </header>

    <!-- Tarjetas del dashboard -->
    <div class="valorant-dashboard">
        <a href="{{ route('products.index') }}" class="valorant-card">
            <div class="card-content">
                <h2>Productos</h2>
                <p>Gestiona, crea y actualiza los productos del inventario.</p>
            </div>
        </a>

        <a href="{{ route('sales.index') }}" class="valorant-card">
            <div class="card-content">
                <h2>Ventas</h2>
                <p>Controla y registra las ventas de tus productos.</p>
            </div>
        </a>

        <a href="{{ route('sale_details.index') }}" class="valorant-card">
            <div class="card-content">
                <h2>Detalle de Ventas</h2>
                <p>Consulta cada transacción con todos sus detalles.</p>
            </div>
        </a>

        <a href="#" class="valorant-card">
            <div class="card-content">
                <h2>Gráficos</h2>
                <p>Visualiza estadísticas y reportes de desempeño.</p>
            </div>
        </a>
    </div>

</body>
</html>
