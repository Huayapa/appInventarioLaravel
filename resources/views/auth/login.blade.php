<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    @vite(['resources/css/login.css', 'resources/js/app.js'])
</head>
<body>

    <div class="login-container">
        <div class="login-box">

            <h2>Iniciar sesión</h2>

            <!-- Estado de sesión -->
            @if (session('status'))
                <div class="session-status">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Recordarme -->
                <div class="form-remember">
                    <input id="remember_me" type="checkbox" name="remember">
                    <label for="remember_me">Recuérdame</label>
                </div>

                <!-- Botones -->
                <div class="form-actions">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    @endif

                    <button type="submit">Entrar</button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
