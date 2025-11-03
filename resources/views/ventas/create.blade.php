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

            <form class="create-form">
                <div class="form-group">
                    <label for="user_id">Usuario</label>
                    <input type="text" id="user_id" name="user_id" placeholder="Ingrese el ID del usuario" required>
                </div>

                <div class="form-group">
                    <label for="sale_date">Fecha de Venta</label>
                    <input type="datetime-local" id="sale_date" name="sale_date" required>
                </div>

                <div class="form-group">
                    <label for="total">Total (S/)</label>
                    <input type="number" id="total" name="total" step="0.01" placeholder="Ingrese el total" required>
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
