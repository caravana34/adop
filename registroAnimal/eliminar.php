<?php

include("../config/conexion.php");
$id=$_REQUEST['id'];
$consulta="delete from animal where id='$id'";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    //echo "eliminada";
    header("location:consultaSolicitudAdopcion.php");
}
else{
    echo "No se elimino";
}

?>