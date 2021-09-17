<?php

include("../config/conexion.php");
    $id=$_REQUEST['id'];
    $identificacion=$_POST['identificacion'];
    $nombre=$_POST['nombre'];
    $ciudad=$_POST['ciudad'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $contrasena=$_POST['contrasena'];
    $estado=$_POST['estado'];
    $idTipoUsuario=$_POST['idTipoUsuario'];
    $consulta="update usuario set identificacion='$identificacion',nombre='$nombre',ciudad='$ciudad',correo=' $correo',telefono='$telefono',contrasena='$contrasena', estado='$estado', idTipoUusario='$idTipoUusario' WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
    //echo "Guardada";
    header("location:consultaRegistroCliente.php");
}
else{
    echo "No se guardo";
}

?>