<?php if (isset($_POST["enviar"])){
    include("../config/conexion.php");
    $nombre=$_POST['nombre'];
    $idRaza=$_POST['idRaza'];
    $color=$_POST['color'];
    $edad=$_POST['edad'];
    $tamano=$_POST['tamano'];
    $CaracPersonalidad=$_POST['CaracPersonalidad'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $sexo=$_POST['sexo'];
    $idEspecie=$_POST['idEspecie'];
    
    $insertardatos="insert into animal values ('',
    '$nombre',
        '$idRaza',
            '$color',
                '$edad',
                    '$tamano',
                        '$CaracPersonalidad',
                            '$imagen',
                            '$sexo',
                            '$idEspecie')";
                                $ejecutarinsertar=mysqli_query($conexion,$insertardatos);
                                if(!$ejecutarinsertar){
                            echo "Error en la linea de sql";
                                                              }
                        header("location:./consultaRegistroAnimal.php");
                        
    
}
?>