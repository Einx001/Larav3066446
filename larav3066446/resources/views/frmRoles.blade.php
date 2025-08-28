<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
</head>
<body>
    <h1>Crear Roles</h1>
    
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="num">Ingrese el nombre del rol:</label>
        <input type="text" name="nombreRol" id="num" required min="0"><br>
    
        <button type="submit">Registrar</button>
    </form>
</body>
</html>