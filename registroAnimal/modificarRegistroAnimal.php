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
        <nav class="nav-main"><a href="./../index.php" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
        </nav> 
            <div>
    <center>
    <div class="pasosSolicitud">
                   <h1 class="sectiontitle"> Modificar registros de animales</h1>
                   <p class="parrafoSolicitud">Si quieres modificar un registro debes  seguir estos pasos:</p>
                   <p class="parrafoSolicitud">1 - Identifica el dato que quieres cambiar</p>
                   <p class="parrafoSolicitud">2 - Llénalo de manera correcta, los datos están pre diligenciados</p>
                   <p class="parrafoSolicitud">3 - debes identificar la imagen y cargarla de nuevo. </p>
                   
                   </div>
                   <br><br>
        <form class="regis" action="fun_modificar.php?id=<?php echo $fila['id']; ?>" autocomplete="on" method="POST"   enctype="multipart/form-data">
            Nombre<br><input type="text" name="nombre"  value="<?php echo($fila['nombre']);?>"  required  ><br><br>
           idRaza <br><input type="text" name="idRaza"  value="<?php echo($fila['idRaza']);?>" required><br><br>
           Raza <br><input type="text" name="raza"  value="<?php echo($fila['raza']);?>" required><br><br>
           Color<br><input type="text" name="color"   value="<?php echo($fila['color']);?>" required><br><br>
            Edad<br><input type="text" name="edad"   value="<?php echo($fila['edad']);?>" Required><br><br>
             Tamaño<br><input type="text" name="tamano"   value="<?php echo($fila['tamano']);?>" Required><br><br>
             Características<br><input type="text" name="CaracPersonalidad"   value="<?php echo($fila['CaracPersonalidad']);?>" Required><br><br>
             Sexo<br><input type="text" name="sexo"   value="<?php echo($fila['sexo']);?>" Required><br><br>
             <img height="50px" src="data:image/jpg;base64,
                <?php echo base64_encode($fila['imagen']);?>" require/>
             Imagen<br><input type="file" name="imagen"  value="<?php echo base64_encode($fila['imagen']);?>" Required><br><br>
             
            
    
            <input class="btn1" type="submit" value="aceptar">
        </form>
</center>
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

</body>
</html>