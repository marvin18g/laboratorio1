<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
<?php
$nombre = $_POST['name'];
$color = $_POST['color'];
$raza = $_POST['raza'];
$sexo = $_POST['sexo'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$edad = $_POST['edad'];
$aime = $_POST['alime'];
$datos = $_POST['datos'];





?>

<br>

<div class="container">

<br>

<h1>Datos de la Mascota</h1>
<br>
<table border ="1"class="table table-dark table-striped">
    <tr>
        <td>Nombre:</td>
        <td><?php echo $nombre?> </td>
    </tr>
    <tr>
        <td>Color:</td>
        <td><?php echo $color?> </td>
    </tr>

    <tr>
        <td>Raza:</td>
        <td><?php echo $raza?> </td>
    </tr>

    
    <tr>
        <td>Sexo:</td>
        <td><?php echo $sexo?> </td>
    </tr>

     
    <tr>
        <td>Peso:</td>
        <td><?php echo $peso?> </td>
    </tr>

    <tr>
        <td>Altura:</td>
        <td><?php echo $altura?> </td>
    </tr>

    <tr>
        <td>Edad:</td>
        <td><?php echo $edad?> </td>
    </tr>

    <tr>
        <td>Alimentacion:</td>
        <td><?php echo $aime?> </td>
    </tr>

    <tr>
        <td>Consulta:</td>
        <td><?php echo $datos?> </td>
    </tr
</table>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

