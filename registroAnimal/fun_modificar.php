<?php

include("../config/conexion.php");
    $id=$_REQUEST['id'];
    $nombre=$_POST['nombre'];
    $idRaza=$_POST['idRaza'];
    $raza=$_POST['raza'];
    $color=$_POST['color'];
    $edad=$_POST['edad'];
    $tamano=$_POST['tamano'];
    $CaracPersonalidad=$_POST['CaracPersonalidad'];
    $sexo=$_POST['sexo'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
    //$idTipoUsuario=$_POST['idTipoUsuario'];
    $consulta="update animal set id='$id',nombre='$nombre',idRaza='$idRaza', raza='$raza', color='$color', edad='$edad',tamano='$tamano',CaracPersonalidad='$CaracPersonalidad', imagen='$imagen'  WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
    //echo "Guardada";
    header("location:consultaRegistroAnimal.php");
}
else{
    echo "No se guardo";
}

?>