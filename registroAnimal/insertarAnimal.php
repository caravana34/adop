<?php if (isset($_POST["enviar"])){
    include("../config/conexion.php");
    $nombre=$_POST['nombre'];
    $idRaza=$_POST['idRaza'];
    $color=$_POST['color'];
    $edad=$_POST['edad'];
    $tamano=$_POST['tamano'];
    $caracPersonalidad=$_POST['caracPersonalidad'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
    $insertardatos="insert into animal values ('',
    '$nombre',
        '$idRaza',
            '$color',
                '$edad',
                    '$tamano',
                        '$caracPersonalidad',
                            '$imagen')";
                                $ejecutarinsertar=mysqli_query($conexion,$insertardatos);
                                if(!$ejecutarinsertar){
                            echo "Error en la linea de sql";
                                                              }
                        header("location:.././index.html");
                        
    
}
?>