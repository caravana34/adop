<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./solicitudAdopcion.css">
    <title>Consulta Solicitud Adopcion</title>
</head>
<body>
<nav class="nav-main"><a href="../index.php" >
         <img src="../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
    <center>
    <table class="regis" border ="1">
    <thead>
            <tr>
            <th>Id</th>
            <th>Correo electronico</th>
            <th>Cedula</th>
            <th>Carta de voluntad</th>
            <th>Animal</th>
            <th colspan="2">Operacion</th>
            
</tr>
        </thead>

        <tbody>
        
        <?php 
        include('../config/conexion.php');
        $consulta="select * from solicitud";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultado)) // ciclo mientras para ordenar en la estructura los campos
{
    echo"<tr>";
    echo"<td>".$fila['id'];
    echo"<td>".$fila['correoElectronico'];
    echo"<td>" ?> <img height="50px" src="data:image/jpg;base64,
    <?php echo base64_encode($fila['cedula']);?>"/>
   <?php
    echo"<td>".$fila['cartaVoluntad'];
    echo"<td>".$fila['animal'];
    ?>
    </td>
    
    

    <th><a href="modificar.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <th><a href="eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>
    <div><a href=".././FormRegistroUsuario/consultaRegistroCliente.php">Volver</a></div>
    </center>
    <footer class="footer">
        <h4><a href="../index.html">Mi mascota copyright</a></h4>
    </footer>

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="../main.js"></script> 
</body>
</html>

