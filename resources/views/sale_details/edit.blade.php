<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Detalle de Venta</title>
    @vite(['resources/css/edit_detalle_ventas.css'])
</head>
<body>
    <div class="edit-container">
        <div class="edit-box">
            <h2>Editar Detalle de Venta</h2>

            <form class="edit-form" method="POST" action="{{ route('sale_details.update', $saleDetail) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="sale_id">ID Venta</label>
                    <input type="number" id="sale_id" name="sale_id" placeholder="Ingrese el ID de la venta" value="1" required>
                </div>

                <div class="form-group">
                    <label for="product_id">ID Producto</label>
                    <input type="number" id="product_id" name="product_id" value="1" placeholder="Ingrese el ID del producto" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Cantidad</label>
                    <input type="number" id="quantity" name="quantity" value="2" placeholder="Ingrese la cantidad" required>
                </div>

                <div class="form-group">
                    <label for="unit_price">Precio Unitario (S/)</label>
                    <input type="number" id="unit_price" value="105" name="unit_price" step="0.01" placeholder="Ingrese el precio unitario" required>
                </div>

                <div class="form-group">
                    <label for="subtotal">Subtotal (S/)</label>
                    <input type="number" id="subtotal" value="100" name="subtotal" step="0.01" placeholder="Ingrese el subtotal" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-update">Actualizar</button>
                    <a href="{{ route('sale_details.index') }}" class="btn-cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
