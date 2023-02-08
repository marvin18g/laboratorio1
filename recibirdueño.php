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
<style>

body{

  font-family: 'Poppins', sans-serif;
}
</style>
<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefonon = $_POST['tel'];
$direccion = $_POST['dir'];
$documento = $_POST['dui'];
$estadocivil = $_POST['estado'];
$edad = $_POST['edad'];
$auto = $_POST['auto'];
$datos = $_POST['datos'];





?>

<br>

<div class="container">

<br>

<h1>Datos generales del Dueño</h1>
<br>
<table border ="1"class="table table-dark table-striped">
    <tr>
        <td>Nombre:</td>
        <td><?php echo $nombre?> </td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $email?> </td>
    </tr>

    <tr>
        <td>Telefono:</td>
        <td><?php echo $telefonon?> </td>
    </tr>

    
    <tr>
        <td>Direccion:</td>
        <td><?php echo $direccion?> </td>
    </tr>

     
    <tr>
        <td>Dui:</td>
        <td><?php echo $documento?> </td>
    </tr>

    <tr>
        <td>Estado civil:</td>
        <td><?php echo $estadocivil?> </td>
    </tr>

    <tr>
        <td>Edad:</td>
        <td><?php echo $edad?> </td>
    </tr>

    <tr>
        <td>Automovil:</td>
        <td><?php echo $auto?> </td>
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

