<?php

include("../config/conexion.php");
    $id=$_REQUEST['id'];
    $nombre=$_POST['nombre'];
    $idRaza=$_POST['idRaza'];
    $edad=$_POST['edad'];
    $tamano=$_POST['tamano'];
    $CaracPersonalidad=$_POST['CaracPersonalidad'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    //$idTipoUsuario=$_POST['idTipoUsuario'];
    $consulta="update animal set id='$id',nombre='$nombre',idRaza='$idRaza',edad=' $edad',tamano='$tamano',CaracPersonalidad='$CaracPersonalidad', imagen='$'  WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
    //echo "Guardada";
    header("location:consultaSolicitudAdopcion.php");
}
else{
    echo "No se guardo";
}

?>