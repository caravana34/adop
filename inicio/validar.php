<?php $correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
session_start();//crear un inicio de session
$_SESSION['correo']=$usuario;

include('../config/conexion.php');

$consulta="select * from usuario where correo='$correo' and contrasena='$contrasena'";
$resultado =mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if ($filas['idTipoUsuario']==1){header("location:../FormRegistroUsuario/consultaRegistroCliente.php");
}
elseif
 ($filas['idTipoUsuario']==2){
    header("location:../adopciones/adopciones.html");
    
 }else{
    include("../adopciones/adopciones.html");
?>
    <h1> Datos de ingreso erroneos</h1>
    <?php 
    }
mysqli_free_result($resultado);
mysqli_close($conexion); 