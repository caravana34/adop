<?php

include("../config/conexion.php");
$id=$_REQUEST['id'];
$consulta="delete from especie where id='$id'";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    //echo "eliminada";
    header("location:../registroAnimal/registroAnimal.php");
}
else{
    echo "No se elimino";
}

?>