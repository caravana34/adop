<?php

include("../config/conexion.php");
$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];


$consulta="update usuario set nombre='$nombre', where id='$id'";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    //echo "Guardada";
    header("location:index.php");
}
else{
    echo "No se guardo";
}

?>