<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Venta</title>
    @vite(['resources/css/crear_productos.css'])
</head>
<body>
    <div class="create-container">
        <div class="create-box">
            <h2>Registrar Nuevo Producto</h2>

            <form class="create-form">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Ingrese el nombre del producto" required>
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea id="description" name="description" rows="3" placeholder="Ingrese una descripción"></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Precio (S/)</label>
                    <input type="number" id="price" name="price" step="0.01" placeholder="Ingrese el precio" required>
                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" id="stock" name="stock" placeholder="Ingrese el stock disponible" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-create">Guardar</button>
                    <a href="/ventas" class="btn-cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
