<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('../config/conexion.php');
    $id=$_REQUEST['id'];
    $consulta="select * from usuario where id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $fila=mysqli_fetch_array($resultado);
    ?>
    <center>
        <form action="fun_modificar.php?id=<?php echo $fila['id']; ?>" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre" require>
            
            <input type="submit" value="aceptar">
        </form>
</center>

</body>
</html>