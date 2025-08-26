<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallar notas</title>
</head>
<body>
    <h1>Hallar notas</h1>
    
    <form action="{{ route('notas.procesar') }}" method="POST">
        @csrf
        <label for="num">Ingresa la nota 1:</label>
        <input type="number" name="num1" id="num" required min="0"><br>
        <label for="num">Ingresa la nota 2:</label>
        <input type="number" name="num2" id="num" required min="0"><br>
        <label for="num">Ingresa la nota 3:</label>
        <input type="number" name="num3" id="num" required min="0"><br>
        <label for="num">Ingresa la nota 4:</label>
        <input type="number" name="num4" id="num" required min="0"><br>
        <label for="num">Ingresa la nota 5:</label>
        <input type="number" name="num5" id="num" required min="0"><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>