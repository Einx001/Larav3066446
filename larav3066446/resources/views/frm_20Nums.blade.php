<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar 20 Numeros</title>
</head>
<body>
    <h1>Analizar 20 numeros pares</h1>
    
    <form action="{{ route('F20Nums.procesar') }}" method="POST">
        @csrf
        <label for="num">Presione el boton para iniciar:</label>

        <button type="submit">Iniciar</button>
    </form>
</body>
</html>