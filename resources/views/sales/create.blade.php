<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Venta</title>
    @vite(['resources/css/create_ventas.css'])
</head>
<body>
    <div class="create-container">
        <div class="create-box">
            <h2>Registrar Nueva Venta</h2>

            <form class="create-form" action="{{ route('sales.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="product_id">Producto</label>
                    <select id="product_id" name="product_id">
                        @foreach ($products as $product)
                        <option value="{{ $product->id }}"> {{ $product->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantity">Cantidad</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Ingrese la cantidad del producto" required>
                </div>
{{-- 
                <div class="form-group">
                    <label for="total">Total (S/)</label>
                    <input type="number" id="total" name="total" step="0.01" placeholder="Ingrese el total" required>
                </div> --}}

                <div class="form-actions">
                    <button type="submit" class="btn-create">Guardar</button>
                    <a href="{{ route('sales.index') }}" class="btn-cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
