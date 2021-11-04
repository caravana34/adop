<?php
session_start();
if(($_SESSION['id']) != ''){

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./FormRegistroUsuario.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400 & display = swap "rel =" stylesheet ">
    
    <title>BlogForm</title>
</head>
<body>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>

    </div>
    <nav class="nav-main"><a href="./../index.php" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
        
        <div class="container5">
        <center>
    <a href=".././solicitudAdopcion/consultaSolicitudAdopcion.php" id="btn-comp2">Módulo Adopción</a>
    <a href=".././registroAnimal/registroAnimal.php" id="btn-comp2">Módulo Animal</a>
    <a href=".././FormRegistroUsuario/consultaRegistroCliente.php" id="btn-comp2">Módulo Usuarios</a>
    <a href=".././blog/blogform.php" id="btn-comp2">Blog</a>
    <a href=".././FormRegistroUsuario/formRegistroAdministrador.php" id="btn-comp2">AdminRegister</a>
    
        </center>
       <center> <div class="pasosSolicitud">
                   <h1 class="titlerace"> Registrar y consultar Artículos de Blog</h1><br>
                   <p class="parrafoSolicitud">Si quieres registrar o consultar los artículos de blog debes seguir estos pasos:</p><br>
                   <p class="parrafoSolicitud">1 - Utliza los textos que has construido pra ingresarlos en el formulario para llenar el formulario de ingreso animal</p>
                   <p class="parrafoSolicitud">2 - Ten encuenta seguir la notación Dog para perros y le sumas el número(ej: Dog 1)</p>
                   
                   
                   </div>
                   <br><br>
                   </center>
        <div class="">
        
            <div>
            <center><h1 class="titlerace">Registro Blog</h1></center>
                <form class="regis1" action="./insertarBlog.php" method="POST" enctype="multipart/form-data">
                    Título <br><input type="text" name="titulo" size="30" maxlength="50" placeholder="Nombre" required> <br><br>
                    Subtítulo 1<br><input type="text" name="subtitle1" size="30" maxlength="50" placeholder="Id -Raza" required> <br><br>
                    
                    Parrafo 1<br> <textarea name="parrafo1" required></textarea><br><br>
                    Subtítulo 2<br> <input class="place" type="text" name="subtitle2" size="30" maxlength="50" placeholder="edad" required> <br><br>
                    Parrafo 2<br><textarea name="parrafo2" required></textarea> <br><br>    
                    
                    Imagen<br><input type="file" name="imagen" size="30" maxlength="50" placeholder="Imagen Mascota" required> <br><br>
                    
                    <!--Estado <br><input class="place"  type="text" name="Estado" size="30" maxlength="50" placeholder="Descripción"> <br><br>-->
                    <input class="btn1" type="submit" name="enviar" value="Enviar">
                 </form>
            </div>
        
    <center><h1 class="titlerace">Tabla Consulta de Artículos de Blog</h1></center>
    <table class="regis" >
    <thead>
            <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Subtítulo 1</th>
            <th>Parrafo 1</th>
            <th>Subtítulo 2</th>
            <th>Parrafo 2</th>
            <th>Imagen</th>
            

           
            <th colspan="2">Operacion</th>
            
</tr>
        </thead>

        <tbody>
        
        <?php 
        include('../config/conexion.php');
        $consulta="select * from blog";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultado)) // ciclo mientras para ordenar en la estructura los campos
{
    echo"<tr>";
    echo"<td >".$fila['id'];
    echo"<td>".$fila['titulo'];
    echo"<td>".$fila['subtitle1'];
    echo"<td >".$fila['parrafo1'];
    echo"<td>".$fila['subtitle2'];
    echo"<td>".$fila['parrafo2'];
    
    echo"<td>" ?> <img height="50px" src="data:image/jpg;base64,
    <?php echo base64_encode($fila['imagen']);?>"/>
    
     </td>

    <td><a href="modificarRegistroBlog.php?id=<?php echo $fila['id']; ?>" class="btn1"> Modificar </a></th>

    <td><a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn1"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>
    
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


<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="main.js"></script>
</body>

</html>
<?php
}
else{
  header("location:../inicio/inicio.php");
}
?>