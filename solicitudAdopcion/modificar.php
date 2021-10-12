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
        <nav class="nav-main"><a href="../index.html" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
        </nav> 
         
        <div>

        <form class="regis" action="fun_modificar.php?id=<?php echo $fila['id']; ?>" autocomplete="on" method="POST"   enctype="multipart/form-data">
            
                    Usuario<br><input type="text" name="correoElectronico" size="30" maxlength="50"  value="<?php echo($fila['correoElectronico']);?>"> <br><br>
                    <img height="50px" src="data:image/jpg;base64,
                <?php echo base64_encode($fila['cedula']);?>" require/><br>
                    Cédula<br><input type="file" value="<?php echo base64_encode($fila['cedula']);?>" name="cedula" > <br><br>
                                                        
                    

                    Carta de voluntad<textarea name="cartaVoluntad" value="<?php echo($fila['cartaVoluntad']);?>"></textarea><br><br>

                    Animal<br><input type="text" name="animal" size="30" maxlength="50"  value="<?php echo($fila['animal']);?>"> <br><br>
                    
                    <input class="btn1" type="submit" name="enviar" value="aceptar">
                 </form>
                   </div>

                   <footer class="footer">
        <h4><a href="../index.php">Mi mascota copyright</a></h4>
    </footer>


</body>
</html>