<?php

include("../config/conexion.php");
$id=$_REQUEST['id'];
$consulta="delete from raza where id='$id'";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    //echo "eliminada";
    header("location:../registroRaza/consultaRegistroRaza.php");
}
else{
    echo "No se elimino";
}

?>