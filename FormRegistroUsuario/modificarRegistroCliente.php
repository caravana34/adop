<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./FormRegistroUsuario.css">
    <title>Document</title>
</head>
<body>
    <?php include('../config/conexion.php');
    $id=$_REQUEST['id'];
    $consulta="select * from usuario where id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $fila=mysqli_fetch_array($resultado);
    ?>
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="container5">
        <nav class="nav-main"><a href="./../index.html" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
        </nav> 
            <div>
    <center>
        <form class="regis" action="fun_modificar.php?id=<?php echo $fila['id']; ?>" autocomplete="on" method="POST"   enctype="multipart/form-data">
            <input type="text" name="identificacion" placeholder="Cedula" required  ><br><br>
            <input type="text" name="nombre" placeholder="Nombre" required><br><br>
             <input type="text" name="ciudad" placeholder="Ciudad" required><br><br>
            <input type="text" name="correo" placeholder="Correo" Required><br><br>
             <input type="text" name="telefono" placeholder="telefono" Required><br><br>
             <input type="text" name="contrasena" placeholder="Contraseña" Required><br><br>
             <input type="text" name="estado" placeholder="estado" Required><br><br>
             <input type="text" name="idTipoUsario" placeholder="idTipoUsuario" Required><br><br>
            
    
            <input class="btn1" type="submit" value="aceptar">
        </form>
</center>

</body>
</html>