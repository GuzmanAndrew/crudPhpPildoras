<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
       include("conexion.php");
       $id = $_GET["id"]; 
       $base->query("DELETE FROM data_usuarios WHERE Id = '$id'");
       header("Location:index.php");
    ?>
</body>
</html>