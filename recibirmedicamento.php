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
$dosis = $_POST['dosis'];
$enfermadad = $_POST['enfe'];
$farmaca = $_POST['farmac'];
$preciomedi = $_POST['precio'];
$fechavencimiento = $_POST['vencimien'];
$oralintravenosa = $_POST['oral'];
$dias = $_POST['dias'];
$datos = $_POST['datos'];





?>

<br>

<div class="container">

<br>

<h1>Datos de la Mascota</h1>
<br>
<table border ="0"class="table table-secondary table-striped">
    <tr>
        <td>Nombre:</td>
        <td><?php echo $nombre?> </td>
    </tr>
    <tr>
        <td>Dosis:</td>
        <td><?php echo $dosis?> </td>
    </tr>

    <tr>
        <td>Malestar:</td>
        <td><?php echo $enfermadad?> </td>
    </tr>

    
    <tr>
        <td>Nombre de farmacia:</td>
        <td><?php echo $farmaca?> </td>
    </tr>

     
    <tr>
        <td>Precio:</td>
        <td><?php echo $preciomedi?> </td>
    </tr>

    <tr>
        <td>Fecha de vencimiento:</td>
        <td><?php echo $fechavencimiento?> </td>
    </tr>

    <tr>
        <td>Administracion oral o Intravenosa:</td>
        <td><?php echo $oralintravenosa?> </td>
    </tr>

    <tr>
        <td>Tiempo de medicamento:</td>
        <td><?php echo $dias?> </td>
    </tr>

    <tr>
        <td>Datos especificos:</td>
        <td><?php echo $datos?> </td>
    </tr
</table>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

