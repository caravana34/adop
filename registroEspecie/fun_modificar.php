<?php

include("../config/conexion.php");
    $id=$_REQUEST['id'];
    $nombre=$_POST['nombre'];
    
    
    //$idTipoUsuario=$_POST['idTipoUsuario'];
    $consulta="update especie set id='$id',nombre='$nombre' WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
    //echo "Guardada";
    header("location:../registroAnimal/registroAnimal.php");
}
else{
    echo "No se guardo";
}

?>