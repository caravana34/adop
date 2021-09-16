<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./solicitudAdopcion.css">
    <title>Modificar solicitud adopcion</title>
</head>
<body>
    <?php include('../config/conexion.php');
    $id=$_REQUEST['id'];
    $consulta="select * from solicitud where id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $fila=mysqli_fetch_array($resultado);
    ?>
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="container5">
        <nav class="nav-main"><a href="./../consultaSolicitudAdopcion.php" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
        </nav> 
         
        <div>

        <form class="regis" action="fun_modificar.php?id=<?php echo $fila['id']; ?>" autocomplete="on" method="POST"   enctype="multipart/form-data">
            
                    Usuario<br><input type="text" name="correoElectronico" size="30" maxlength="50" placeholder="Correo Electronico"> <br><br>
                    Cédula<br><input type="file" name="cedula" size="30" maxlength="50" placeholder="E-mail"> <br><br>
                    Carta de voluntad<textarea name="cartaVoluntad"></textarea><br><br>
                    Animal<br><input type="text" name="animal" size="30" maxlength="50" placeholder="E-mail"> <br><br>
                    
                    <input class="btn1" type="submit" name="enviar" value="aceptar">
                 </form>
                   </div>

                   <footer class="footer">
        <h4><a href="../index.html">Mi mascota copyright</a></h4>
    </footer>


</body>
</html>