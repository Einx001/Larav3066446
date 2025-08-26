<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Adivinar...</h1>

 <form action="{{route('adivinar.procesar')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="title">Ingrese un numero del 1 al 70:</label>
        <input type="number" id="title" name="num" required>

        <input type="hidden" name="numAleatorio" value="{{ $numAleatorio }}">
    <br><br>

    <button type="submit">Enviar</button>
</form>