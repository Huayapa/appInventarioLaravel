<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Productos</title>
    @vite(['resources/css/welcome.css'])
</head>

<body>

    <!-- Barra superior -->
    <header class="navbar">
        <h1 class="logo">Tienda Gamer</h1>
        <div>
            <a href="/login" class="login-btn">Login</a>
            <a href="/register" class="login-btn">Register</a>
        </div>
    </header>

    <!-- Contenedor de productos -->
    <div class="product-container">
        @foreach ($products as $product)
            <div class="product-card">
                <h3 class="product-name">{{ $product->name }}</h3>
                <p class="product-description">{{ $product->description }}</p>
                <div class="product-info">
                    <span class="price">S/ {{ number_format($product->price, 2) }}</span>
                    <span class="stock">Stock: {{ $product->stock }}</span>
                </div>
                <a href="{{ route('buy.product', $product) }}" class="buy-btn">Comprar</a>
            </div>
        @endforeach

        <div class="product-card">
            <h3 class="product-name">Mouse Gamer</h3>
            <p class="product-description">Mouse ergonómico con sensor óptico de alta precisión.</p>
            <div class="product-info">
                <span class="price">S/ 80.00</span>
                <span class="stock">Stock: 25</span>
            </div>
            <button class="buy-btn">Comprar</button>
        </div>

        <div class="product-card">
            <h3 class="product-name">Auriculares</h3>
            <p class="product-description">Auriculares con sonido envolvente 7.1 y micrófono retráctil.</p>
            <div class="product-info">
                <span class="price">S/ 120.00</span>
                <span class="stock">Stock: 8</span>
            </div>
            <button class="buy-btn">Comprar</button>
        </div>
    </div>

</body>

</html>
