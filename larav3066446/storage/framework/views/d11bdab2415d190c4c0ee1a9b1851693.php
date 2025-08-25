<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el número</title>
</head>
<body>
    <h1>Juego: Adivina un número entre 1 y 70</h1>

    <form method="POST" action="<?php echo e(route('adivinar.procesar')); ?>">

        <?php echo csrf_field(); ?>

        <!--<label for="title" >Ingrese el valor de a: </label>
        <input type="text" id="title" name="a" required>

        <label for="title" >Ingrese el valor de b: </label>
        <input type="text" id="title" name="b" required>

        <label for="title" >Ingrese el valor de c: </label>
        <input type="text" id="title" name="c" required>-->

        <label for="intento">Escribe tu número:</label>
        <input type="number" id="intento" name="intento" placeholder="1 - 70" required min="1" max="70">
        <button type="submit">Probar</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Larav3066446\larav3066446\resources\views/frm_Adivinar.blade.php ENDPATH**/ ?>