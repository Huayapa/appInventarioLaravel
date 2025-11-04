<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta</title>
    @vite(['resources/css/edit_ventas.css'])
</head>

<body>
    <div class="edit-container">
        <div class="edit-box">
            <h2>Editar Venta</h2>

            <form class="create-form" action="{{ route('sales.update', $sale) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="user_id">Usuario</label>
                    <input type="text" id="user_id" name="user_id" placeholder="Ingrese el usuario" value="{{ $sale->user->name }}"
                        required /> 
                </div>
{{-- 
                <div class="form-group">
                    <label for="quantity">Cantidad</label>
                    <input type="number" id="quantity" name="quantity" placeholder="Ingrese la cantidad del producto" value="{{ $sale->details->quantity }}"
                        required>
                </div> --}}
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
