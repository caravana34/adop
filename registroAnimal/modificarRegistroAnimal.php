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
    $consulta="select * from animal where id='$id'";
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
            <input type="text" name="nombre"  value="<?php echo($fila['nombre']);?>"  required  ><br><br>
            <input type="text" name="idRaza"  value="<?php echo($fila['idRaza']);?>" required><br><br>
             <input type="text" name="color"   value="<?php echo($fila['color']);?>" required><br><br>
            <input type="text" name="edad"   value="<?php echo($fila['edad']);?>" Required><br><br>
             <input type="text" name="tamano"   value="<?php echo($fila['tamano']);?>" Required><br><br>
             <input type="text" name="CaracPersonalidad"   value="<?php echo($fila['CaracPersonalidad']);?>" Required><br><br>
             <input type="text" name="imagen"  value="<?php echo base64_encode($fila['imagen']);?>" Required><br><br>
             
            
    
            <input class="btn1" type="submit" value="aceptar">
        </form>
</center>

</body>
</html>