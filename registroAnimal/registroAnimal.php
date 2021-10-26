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
    
    <title>Animal</title>
</head>
<body>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>

    </div>
    <nav class="nav-main"><a href="./../index.php" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
        <ul class="nav-main">
            <li ><a href=".././solicitudAdopcion/consultaSolicitudAdopcion.php">Módulo Adopción</a></li>
            <li><a href=".././registroAnimal/registroAnimal.php">Módulo Animal</a></li>
            <li><a href=".././FormRegistroUsuario/consultaRegistroCliente.php">Módulo Usuarios</a></li>
            <li><a href=".././FormRegistroUsuario/formRegistroAdministrador.php">AdminRegister</a></li>
            
        </ul>
        <div class="container5">
       <center> <div class="pasosSolicitud">
                   <h1 class="sectiontitle"> Registrar y consultar animales en mimascota</h1>
                   <p class="parrafoSolicitud">Si quieres registrar o consultar los animales candidatos a ser adoptados debes  seguir estos pasos:</p>
                   <p class="parrafoSolicitud">1 - Consulta las tablas de raza(IdRaza, raza) y especie( id en la tabla especie) para llenar el formulario de ingreso animal</p>
                   <p class="parrafoSolicitud">2 - Ten encuenta seguir la notación Dog para perros y le sumas el número(ej: Dog 1)</p>
                   
                   
                   </div>
                   <br><br>
                   </center>
        <div class="tableconsult">
        
            <div>
            <center><h1>Registro Animal</h1></center>
                <form class="regis" action="./insertarAnimal.php" method="POST" enctype="multipart/form-data">
                    Nombre <br><input type="text" name="nombre" size="30" maxlength="50" placeholder="Nombre" required> <br><br>
                    idRaza <br><input type="text" name="idRaza" size="30" maxlength="50" placeholder="Id -Raza" required> <br><br>
                    
                    Color<br> <input class="place" type="text" name="color" size="30" maxlength="50" placeholder="Colores" required> <br><br>
                    Edad<br> <input class="place" type="text" name="edad" size="30" maxlength="50" placeholder="edad" required> <br><br>
                    Tamaño<br><input class="place"  type="text" name="tamano" size="30" maxlength="50" placeholder="Grande, mediana o pequeña" required> <br><br>    
                    Características de personalidad <br> <textarea name="CaracPersonalidad" required></textarea>  <br><br>
                    Imagen<br><input type="file" name="imagen" size="30" maxlength="50" placeholder="Imagen Mascota" required> <br><br>
                    Sexo <br><input type="text" name="sexo" size="30" maxlength="50" placeholder="Sexo" required> <br><br>
                    IdEspecie <br><input type="number" name="idEspecie" size="30" maxlength="50" placeholder="Id -Especie" required> <br><br>
                    Raza <br><input type="text" name="raza" size="30" maxlength="50" placeholder="Raza" required> <br><br>
                    <!--Estado <br><input class="place"  type="text" name="Estado" size="30" maxlength="50" placeholder="Descripción"> <br><br>-->
                    <input class="btn1" type="submit" name="enviar" value="Enviar">
                 </form>
            </div>
        <div><center><h1 class="titlerace">Tabla de Raza<a href="../registroRaza/registroRaza.php">(Registra una Raza)</a></h1></center>
            <table class="regis" border ="1">
    <thead>
            <tr>
            <th>IdRaza</th>
            <th>Nombre</th>
            <th>IdEspecie</th>
            
            
</tr>
        </thead>

        <tbody>
        
        <?php 
        include('../config/conexion.php');
        $consulta="select * from raza";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultado)) // ciclo mientras para ordenar en la estructura los campos
{
    echo"<tr>";
    echo"<td>".$fila['id'];
    
    echo"<td>".$fila['nombre'];
    echo"<td>".$fila['idEspecie'];
    ?> 
    
     </td>

    <th><a href="../registroRaza/modificar.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <th><a href="eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>

    <center><h1 class="titlerace">Tabla de Especie<a href="../registroEspecie/registroEspecie.php">(Registra una Especie)</a></h1></center>
    <table class="regis" border ="1">
    <thead>
            <tr>
            <th>Id</th>
            <th>Nombre</th>
            
            
            
</tr>
        </thead>

        <tbody>
        
        <?php 
        include('../config/conexion.php');
        $consulta="select * from especie";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultado)) // ciclo mientras para ordenar en la estructura los campos
{
    echo"<tr>";
    echo"<td>".$fila['id'];
    
    echo"<td>".$fila['nombre'];
    
    ?> 
    
     </td>

    <th><a href="../registroEspecie/modificar.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <th><a href="../registroEspecie/eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>

    </div>

    <div class="tableconsult">
            <div></div>
            <div></div>


    </div>
    
    </div>
    <center><h1 class="titlerace">Tabla Consulta de Animales</h1></center>
    <table class="regis" border ="1">
    <thead>
            <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>IdRaza</th>
            <th>Color</th>
            <th>Edad</th>
            <th>Tamaño</th>
            <th>Característica Personalidad</th>
            <th>Sexo</th>
            <th>IdEspecie</th>
            <th>Raza</th>
            <th>Imagen</th>

           
            <th colspan="2">Operacion</th>
            
</tr>
        </thead>

        <tbody>
        
        <?php 
        include('../config/conexion.php');
        $consulta="select * from animal";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultado)) // ciclo mientras para ordenar en la estructura los campos
{
    echo"<tr>";
    echo"<td>".$fila['id'];
    echo"<td>".$fila['nombre'];
    echo"<td>".$fila['idRaza'];
    echo"<td>".$fila['color'];
    echo"<td>".$fila['edad'];
    echo"<td>".$fila['tamano'];
    echo"<td>".$fila['CaracPersonalidad'];
    echo"<td>".$fila['sexo'];
    echo"<td>".$fila['idEspecie'];
    echo"<td>".$fila['raza'];
    echo"<td>" ?> <img height="50px" src="data:image/jpg;base64,
    <?php echo base64_encode($fila['imagen']);?>"/>
    
     </td>

    <th><a href="modificarRegistroAnimal.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <th><a href="eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
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