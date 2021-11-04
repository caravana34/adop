<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./FormRegistroUsuario.css">
    <title>Consulta registro Usuario</title>
</head>
<body><div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <nav class="nav-main">
            <a href="./../index.php" >
                    <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand">
            </a> 
        </nav> 
        
        

    <div class="container5">
    <center>
    <a href=".././solicitudAdopcion/consultaSolicitudAdopcion.php" id="btn-comp2">Módulo Adopción</a>
    <a href=".././registroAnimal/registroAnimal.php" id="btn-comp2">Módulo Animal</a>
    <a href=".././FormRegistroUsuario/consultaRegistroCliente.php" id="btn-comp2">Módulo Usuarios</a>
    <a href=".././blog/blogform.php" id="btn-comp2">Blog</a>
    <a href="./formRegistroAdministrador.php" id="btn-comp2">AdminRegister</a>

    
        </center>
        <center>
        <center><h3 class="user">Usuarios Registrados</h3></center><br>
        <form action="" method="get">
            <input type="text" name="busqueda">
            <input type="submit" name="enviar" value="buscar">
        </form>
        </center>
        <br><br><br>
        <center>
    <table class="regis" >
    <thead>
            <tr>
            <th>Id</th>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Departamento</th>
            <th>Contraseña</th>
            <th>IdTipoUsuario</th>
            <th colspan="2">Operación</th>
            
</tr>
        </thead>

        <tbody>
        
        <?php
         $host = "localhost";
         $user = "root";
         $pw = "";
         $bd = "mimascota";
         
         $conexion = new mysqli($host,$user,$pw,$bd);
         mysqli_set_charset($conexion,"utf8mb4");
        if(isset($_GET['enviar'])){
            $busqueda=$_GET['busqueda'];
            $consulta4 = $conexion->query("select * from usuario where correo LIKE '%$busqueda%'");
            while ($row = $consulta4->fetch_array()){
                echo"<tr>";
    echo"<td>".$row['id'];
    echo"<td>".$row['identificacion'];
    echo"<td>".$row['nombre'];
    echo"<td>".$row['ciudad'];
    echo"<td>".$row['correo'];
    echo"<td>".$row['telefono'];
    echo"<td>".$row['estado'];
    echo"<td>".$row['contrasena'];
    echo"<td>".$row['idTipoUsuario'];
            
        
        ?>  </td>

    <td><a href="modificarRegistroCliente.php?id=<?php echo $fila['id'];?>" class="btn1"> Modificar </a></th>

    <td><a href="eliminar.php?id=<?php echo $fila['id'];?>" class="btn1"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
    }?>
        </tbody>

    </table></center>
        <center>
    <!--<table class="regis" >
    <thead>
            <tr>
            <th>Id</th>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Departamento</th>
            <th>Contraseña</th>
            <th>IdTipoUsuario</th>
            <th colspan="2">Operación</th>
            
</tr>
        </thead>

        <tbody>
        
        <?php 
        include('../config/conexion.php');
        $consulta="select * from usuario";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultado)) // ciclo mientras para ordenar en la estructura los campos
{
    echo"<tr>";
    echo"<td>".$fila['id'];
    echo"<td>".$fila['identificacion'];
    echo"<td>".$fila['nombre'];
    echo"<td>".$fila['ciudad'];
    echo"<td>".$fila['correo'];
    echo"<td>".$fila['telefono'];
    echo"<td>".$fila['estado'];
    echo"<td>".$fila['contrasena'];
    echo"<td>".$fila['idTipoUsuario'];
     ?>  </td>

    <td><a href="modificarRegistroCliente.php?id=<?php echo $fila['id'];?>" class="btn1"> Modificar </a></th>

    <td><a href="eliminar.php?id=<?php echo $fila['id'];?>" class="btn1"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}}?>
        </tbody>

    </table></center>-->

    
    </div>
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

<script src="../main.js"></script> 
</body>
</html>