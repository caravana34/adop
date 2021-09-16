<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Solicitud Adopcion</title>
</head>
<body>
    <center>
    <table border ="1">
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
    echo"<td>".$fila['cartaVoluntad'];
    echo"<td>".$fila['animal'];
    echo"<td>" ?> <img height="50px" src="data:image/jpg;base64,
    <?php echo base64_encode($fila['cedula']);?>"/>
   
    </td>
    

    <th><a href="/FormRegistroUsuario/modificarRegistroCliente.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <th><a href="eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>

    </center>
</body>
</html>

