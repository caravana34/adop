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
    <div class="container5">
        <nav class="nav-main"><a href="./../index.php" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
        </nav> 
        
        <ul>
            <li ><a href=".././solicitudAdopcion/consultaSolicitudAdopcion.php">Consulta Solicitud de Adopción</a></li>
            <li><a href=".././registroAnimal/registroAnimal.php"> Registro Animal</a></li>
            <li><a href=".././registroRaza/registroRaza.php">Raza</a></li>
            <li><a href=".././registroEspecie/registroEspecie.php">Especie</a></li>
            <li><a href="./formRegistroUsuario.php">AdminRegister</a></li>
            <li><a href="../registroAnimal/consultaRegistroAnimal.php"> Consulta Animal</a></li>
            <li><a href="../registroRaza/consultaRegistroRaza.php"> Consulta Raza</a></li>
        </ul>
        
           
    <center>
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

    <th><a href="modificarRegistroCliente.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <th><a href="eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table></center>

    
    </div>
    <footer class="footer">
        <h4><a href="../index.php">Mi mascota copyright</a></h4>
    </footer>

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="../main.js"></script> 
</body>
</html>