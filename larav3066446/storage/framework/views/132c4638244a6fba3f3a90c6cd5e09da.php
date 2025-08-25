<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el número</title>
</head>
<body>
    <h1>Juego: Adivina el número (1 - 70)</h1>

    
    <?php if(!empty($mensaje)): ?>
        <p><?php echo e($mensaje); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('adivinar.procesar')); ?>">
        <?php echo csrf_field(); ?>
        <label for="intento">Escribe tu número:</label>
        <input type="number" id="intento" name="intento" placeholder="1 - 70" required min="1" max="70">
        <button type="submit">Probar</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Larav3066446\larav3066446\resources\views/adivinar.blade.php ENDPATH**/ ?>