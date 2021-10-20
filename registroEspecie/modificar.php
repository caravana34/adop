<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./FormRegistroUsuario.css">
    <title>Modificar solicitud adopcion</title>
</head>
<body>
    <?php include('../config/conexion.php');
    $id=$_REQUEST['id'];
    $consulta="select * from especie where id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $fila=mysqli_fetch_array($resultado);
    ?>
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="container5">
        <nav class="nav-main"><a href="../index.php" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
        </nav> 
         
        <div>

        <form class="regis" action="fun_modificar.php?id=<?php echo $fila['id']; ?>" autocomplete="on" method="POST"   enctype="multipart/form-data">
            
                    Id<br><input type="number" value="<?php echo($fila['id']);?>" name="id" > <br><br>
                                                
                    Nombre<br><input type="text" name="nombre" size="30" maxlength="50"  value="<?php echo($fila['nombre']);?>"> <br><br>

                    
                                                        
                    <input class="btn1" type="submit" name="enviar" value="aceptar">
                 </form>
                   </div>

                   <!--footer-->    
<footer class="footer_container">
<hr>
     

<div class="grid3">

    <div >
      <a href=""><img src="../img/logo-de-Sena-sin-fondo-Blanco-300x300.png" alt="Logo Mimascota" id="footer_logo2"></a>
    </div>
    <div > 
      
        <a href=""><img src="../img/descarga (1).png" alt="Logo Mimascota" id="footer_logo3"></a>
      </div>
      <div>
        <a href="./../index.php"><img src="../img/DERECHO-ANIMAL-brand.png" alt="Logo Mimascota" id="footer_logo1"></a>  
     </div> 

    <div> <p>Developers: <br>Elias Rodriguez<br>JBAD Gómez</p> </div>
    <div>         
       

        <p>Contacto:  <br>eliasjoserodriguez@hotmail.com <br>3002003328 <br> gomezposadadario@gmail.com<br>3148520270</p>
            
                            
    </div>


  

</div>
<br>
<hr>
         
</footer>
<!--footer-->  


</body>
</html>