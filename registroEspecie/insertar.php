<?php if (isset($_POST["enviar"])){
    include("../config/conexion.php");
    $nombre=$_POST['nombre'];
    $insertardatos="insert into especie values ('',
    '$nombre')";
    $ejecutarinsertar=mysqli_query($conexion,$insertardatos);
    if(!$ejecutarinsertar){
    echo "Error en la linea de sql";}
    header("location:../registroAnimal/registroAnimal.php");
                        
    
}
?>


