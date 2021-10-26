<?php

include("../config/conexion.php");
    $id=$_REQUEST['id'];
    $nombre=$_POST['nombre'];
    $idEspecie=$_POST['idEspecie'];
    $consulta="update raza set id='$id',nombre='$nombre',idEspecie='$idEspecie' WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
    //echo "Guardada";
    header("location:../registroAnimal/registroAnimal.php");
}
else{
    echo "No se guardo";
}

?>