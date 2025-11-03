<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Detalle de Venta</title>
    @vite(['resources/css/create_detalle_ventas.css'])
</head>
<body>
    <div class="create-container">
        <div class="create-box">
            <h2>Registrar Detalle de Venta</h2>

            <form class="create-form">
                <div class="form-group">
                    <label for="sale_id">ID Venta</label>
                    <input type="number" id="sale_id" name="sale_id" placeholder="Ingrese el ID de la venta" required>
                </div>

                <div class="form-group">
                    <label for="product_id">ID Producto</label>
                    <input type="number" id="product_id" name="product_id" placeholder="Ingrese el ID del producto" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Cantidad</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Ingrese la cantidad" required>
                </div>

                <div class="form-group">
                    <label for="unit_price">Precio Unitario (S/)</label>
                    <input type="number" id="unit_price" name="unit_price" step="0.01" placeholder="Ingrese el precio unitario" required>
                </div>

                <div class="form-group">
                    <label for="subtotal">Subtotal (S/)</label>
                    <input type="number" id="subtotal" name="subtotal" step="0.01" placeholder="Ingrese el subtotal" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-create">Guardar</button>
                    <a href="/detalle-ventas" class="btn-cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
