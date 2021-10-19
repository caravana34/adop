<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./FormRegistroUsuario.css">
    <title>Consulta registro Usario</title>
</head>
<body><div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <nav class="nav-main">
            <a href="./../index.php" >
                    <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand">
            </a> 
        </nav> 
        
        <ul class="nav-main">
            <li ><a href=".././solicitudAdopcion/consultaSolicitudAdopcion.php">Módulo Adopción</a></li>
            <li><a href=".././registroAnimal/registroAnimal.php">Módulo Animal</a></li>
            <li><a href=".././FormRegistroUsuario/consultaRegistroCliente.php">Módulo Usuarios</a></li>
            <li><a href="./formRegistroAdministrador.php">AdminRegister</a></li>
            
        </ul>

    <div class="container5">
    <center>
        <h1>Usuarios Registrados</h1>
    <table class="regis" border ="1">
    <thead>
            <tr>
            <th>Id</th>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>estado</th>
            <th>contrasena</th>
            <th>IdTipoUsuario</th>
            <th colspan="2">Operacion</th>
            
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

    <th><a href="modificarRegistroCliente.php?id=<?php echo $fila['id'];?>"> Modificar </a></th>

    <th><a href="eliminar.php?id=<?php echo $fila['id'];?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table></center>

    
    </div>
    <<footer class="footer_container">
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