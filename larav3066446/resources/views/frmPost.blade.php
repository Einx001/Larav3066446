<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Crear Post</h1>
    
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="num">Ingrese el nombre del Post:</label>
        <input type="text" name="nombrePost" id="num" required min="0"><br>

        <label for="num">Ingrese el cuerpo del Post:</label>
        <input type="text" name="cuerpoPost" id="num" required min="0"><br>
    
        <button type="submit">Registrar</button>
    </form>
</body>
</html>