<?php if (isset($_POST["enviar"])){
    include("../config/conexion.php");
    $identificacion=$_POST['identificacion'];
    $nombre=$_POST['nombre'];
    $ciudad=$_POST['ciudad'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $contrasena=$_POST['contrasena'];
    $estado=$_POST['estado'];
    $idTipoUsuario=$_POST['idTipoUsuario'];
    $insertardatos="insert into usuario values ('',
    '$identificacion',
        '$nombre',
            '$ciudad',
                '$correo',
                    '$telefono',
                        '$contrasena',
                            '$estado',
                                '$idTipoUsuario')";
                                $ejecutarinsertar=mysqli_query($conexion,$insertardatos);
                                if(!$ejecutarinsertar){
                            echo "Error en la linea de sql";
                                                              }
                        header("location:../formRegistroUsuario/consualtaRegistroCliente.php");
                        
    
}
?>