<?php

include("../config/conexion.php");
$id=$_REQUEST['id'];
$consulta="delete from usuario where id='$id'";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    //echo "eliminada";
    header("location:consultaRegistroCliente.php");
}
else{
    echo "No se elimino";
}

?>