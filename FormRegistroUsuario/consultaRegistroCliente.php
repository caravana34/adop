<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes PHP</title>
</head>
<body>
    <center>
        
    

    <table border ="1">
    <thead>
            <tr>
            <th>Id</th>
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Correo</th>
            <th>Teléfono</th>
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

     ?>  </td>

    <th><a href="/FormRegistroUsuario/modificarRegistroCliente.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <th><a href="eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>

    </center>
</body>
</html>