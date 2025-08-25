<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
</head>
<body>
    <h1>Juego: Adivina el Número (1 al 70)</h1>

    <!-- Mostramos mensaje si existe -->
    @if(isset($mensaje))
        <p><strong>{{ $mensaje }}</strong></p>
    @endif

    <!-- Formulario para enviar intentos -->
    <form action="{{ route('adivinar.procesar') }}" method="POST">
        @csrf
        <label for="numIngresado">Ingresa un número:</label>
        <input type="number" name="numIngresado" id="numIngresado" required>
        <button type="submit">Probar</button>
    </form>
</body>
</html>

