<?php

include("../config/conexion.php");
    $id=$_REQUEST['id'];
    $correoElectronico=$_POST['correoElectronico'];
    $cedula= addslashes(file_get_contents($_FILES['cedula']['tmp_name']));
    $cartaVoluntad=$_POST['cartaVoluntad'];
    $animal=$_POST['animal'];
    //$idTipoUsuario=$_POST['idTipoUsuario'];
    $consulta="update solicitud set id='$id',correoElectronico='$correoElectronico',cedula='$cedula',cartaVoluntad=' $cartaVoluntad',animal='$animal' WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
    //echo "Guardada";
    header("location:consultaSolicitudAdopcion.php");
}
else{
    echo "No se guardo";
}

?>