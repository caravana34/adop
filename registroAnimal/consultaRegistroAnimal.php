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
            <div>



    <center>
    <table class="regis" border ="1">
    <thead>
            <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>IdRaza</th>
            <th>Color</th>
            <th>Edad</th>
            <th>Tamaño</th>
            <th>Cracterística Personalidad</th>
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
    echo"<td>" ?> <img height="50px" src="data:image/jpg;base64,
    <?php echo base64_encode($fila['imagen']);?>"/>
    
     </td>

    <th><a href="modificarRegistroAnimal.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <th><a href="eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>
<div><a href=".././solicitudAdopcion/consultaSolicitudAdopcion.php">Consulta Solicitud de Adopción</a></div>
<div><a href=".././registroAnimal/registroAnimal.php"> Registro Animal</a></div>
<div><a href=".././registroRaza/registroRaza.php">Raza</a></div>
<div><a href=".././registroEspecie/registroEspecie.php"> Especie</a></div>
<div><a href="./formRegistroUsuario.php"> AdminRegister</a></div>
    </center>
</body>
</html>