<?php
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
session_start();//crear un inicio de session
$_SESSION['correo']=$filas['correo'];

include('../config/conexion.php');

$consulta="select * from usuario where correo='$correo' and contrasena='$contrasena'";
$resultado =mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if ($filas['idTipoUsuario']==1){header("location:../FormRegistroUsuario/consultaRegistroCliente.php");
}
elseif
 ($filas['idTipoUsuario']==2){
    header("location:../adopciones/adopciones.php");
 

 }else{
    header("location:../inicio/inicio.php");
?>
    <h1> Datos de ingreso erroneos</h1>
    <?php 
    }
    $_SESSION['id']=$filas['id'];
    $_SESSION['identificacion']=$filas['identificacion'];
    $_SESSION['nombre']=$filas['nombre'];
    $_SESSION['ciudad']=$filas['ciudad'];
    $_SESSION['correo']=$filas['correo'];
    $_SESSION['telefono']=$filas['telefono'];
    $_SESSION['contrasena']=$filas['contrasena'];
    $_SESSION['estado']=$filas['estado'];
    $_SESSION['idTipoUsuario']=$filas['idTipoUsuario'];
   
   
    
mysqli_free_result($resultado);
mysqli_close($conexion);  