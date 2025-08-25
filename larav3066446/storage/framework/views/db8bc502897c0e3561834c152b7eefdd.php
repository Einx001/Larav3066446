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
    <?php if(isset($mensaje)): ?>
        <p><strong><?php echo e($mensaje); ?></strong></p>
    <?php endif; ?>

    <!-- Formulario para enviar intentos -->
    <form action="<?php echo e(route('adivinar.procesar')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="numIngresado">Ingresa un número:</label>
        <input type="number" name="numIngresado" id="numIngresado" required>
        <button type="submit">Probar</button>
    </form>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\Larav3066446\larav3066446\resources\views/frm_adivinar.blade.php ENDPATH**/ ?>