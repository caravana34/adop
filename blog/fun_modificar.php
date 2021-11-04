<?php

include("../config/conexion.php");
    $id=$_REQUEST['id'];
    $titulo=$_POST['titulo'];
    $subtitle1=$_POST['subtitle1'];
    $parrafo1=$_POST['parrafo1'];
    $subtitle2=$_POST['subtitle2'];
    $parrafo2=$_POST['parrafo2'];
    
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
    //$idTipoUsuario=$_POST['idTipoUsuario'];
    $consulta="update blog set titulo='$titulo',subtitle1='$subtitle1',parrafo1='$parrafo1', subtitle2='$subtitle2', parrafo2='$parrafo2', imagen='$imagen',id='$id'  WHERE id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
    //echo "Guardada";
    header("location:blogform.php");
}
else{
    echo "No se guardo";
}

?>