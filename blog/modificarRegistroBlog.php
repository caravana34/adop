<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./FormRegistroUsuario.css">
    <title>ModificarBlog</title>
</head>
<body>
    <?php include('../config/conexion.php');
    $id=$_REQUEST['id'];
    $consulta="select * from blog where id='$id'";
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
            Título<br><input type="text" name="titulo"  value="<?php echo($fila['titulo']);?>"  required  ><br><br>
           SubTítulo <br><input type="text" name="subtitle1"  value="<?php echo($fila['subtitle1']);?>" required><br><br>
           Parrafo 1 <br><input type="text" name="parrafo1"  value="<?php echo($fila['parrafo1']);?>" required><br><br>
           SubTítulo <br><input type="text" name="subtitle2"   value="<?php echo($fila['subtitle2']);?>" required><br><br>
           Parrafo 2<br><textarea type="text" name="parrafo2"  placeholder="<?php echo($fila['parrafo2']);?>" required></textarea><br><br>
           
             
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