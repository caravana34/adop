
<?php if (isset($_POST["enviar"])){
    include("../config/conexion.php");
    $nombre=$_POST['nombre'];
    $idEspecie=$_POST['idEspecie'];
    $insertardatos="insert into raza values ('',
    '$nombre','$idEspecie')";
    $ejecutarinsertar=mysqli_query($conexion,$insertardatos);
    if(!$ejecutarinsertar){
    echo "Error en la linea de sql";}
    header("location:../registroRaza/consultaRegistroRaza.php");
                        
}
?>