<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Crear Usuarios</h1>
    
    <form action="<?php echo e(route('user.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="num">Ingrese el nombre del Usuario:</label>
        <input type="text" name="nombreUser" id="num" required min="0"><br>
    
        <button type="submit">Registrar</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\larav3066446\resources\views/frmUser.blade.php ENDPATH**/ ?>