<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Tablas</title>
</head>
<body>
    <h1>Hallar tabla de multiplicar</h1>
    
    <form action="{{ route('multiplicar.procesar') }}" method="POST">
        @csrf
        <label for="num">Ingresar un numero del 1 al 10:</label>
        <input type="number" name="num" id="num" required min="0"><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>