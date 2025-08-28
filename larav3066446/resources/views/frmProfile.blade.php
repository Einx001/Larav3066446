<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfiles</title>
</head>
<body>
    <h1>Crear Perfiles</h1>
    
    <form action="{{ route('profiles.store') }}" method="POST">
        @csrf
        <label for="num">Ingrese el titulo del perfil:</label>
        <input type="text" name="nombrePerfil" id="num" required min="0"><br>

        <label for="num">Ingrese la biografia del perfil:</label>
        <input type="text" name="biografiaPerfil" id="num" required min="0"><br>

        <label for="num">Ingrese el sitio web del perfil</label>
        <input type="text" name="sitioPerfil" id="num" required min="0"><br>
    
        <button type="submit">Registrar</button>
    </form>
</body>
</html>