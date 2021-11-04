<?php if (isset($_POST["enviar"])){
    include("../config/conexion.php");
    $titulo=$_POST['titulo'];
    $subtitle1=$_POST['subtitle1'];
    $parrafo1=$_POST['parrafo1'];
    $subtitle2=$_POST['subtitle2'];
    $parrafo2=$_POST['parrafo2'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
    
    $insertardatos="insert into blog values (
    '$titulo',
        '$subtitle1',
            ' $parrafo1',
                '$subtitle2',
                    '$parrafo2',
                            '$imagen','')";
                                $ejecutarinsertar=mysqli_query($conexion,$insertardatos);
                                if(!$ejecutarinsertar){
                            echo "Error en la linea de sql";
                                                              }
                        header("location:./registroAnimal.php");
                        
    
}
?>