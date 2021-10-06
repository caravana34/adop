<?php

if (isset($_POST["enviar"])){
    include("../config/conexion.php");


$correoElectronico=$_POST['correoElectronico'];
$cedula= addslashes(file_get_contents($_FILES['cedula']['tmp_name']));
$cartaVoluntad=$_POST['cartaVoluntad'];
$animal=$_POST['animal'];
$insertardatos="insert into solicitud values ('',

'$correoElectronico',
  '$cedula',
    '$cartaVoluntad',
      '$animal')";

        $ejecutarinsertar=mysqli_query($conexion,$insertardatos);
        if(!$ejecutarinsertar){
            echo "error en la linea de sql";
        }

        header("location:./consultaSolicitudAdopcion.php");



      }
?>