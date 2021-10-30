<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="adopciones.css">
    <title>Document</title>
</head>
<script src="popup.js"></script>
<body>
<?php include('../config/conexion.php');
    $id=$_REQUEST['id'];
    $consulta="select * from animal where id='$id' ";
    $resultado=mysqli_query($conexion,$consulta);
    $fila=mysqli_fetch_array($resultado);

    $nombre=$fila['nombre'];

    $consulta3="SELECT count(animal) FROM solicitud WHERE animal='$nombre'";
    $resultado3=mysqli_query($conexion,$consulta3);
    $fila3=mysqli_fetch_array($resultado3);
    ?>
    
<!--<div class="contenedor">
    <a id="btn-abrir-popup" class="btn-abrir-popup">Abrir Ventana Emergente</a></div>-->
<div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <a href="http://localhost/adop/adopciones/adopciones.php" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                
                <div id="iconos1">
                 
                  <a href="https://api.whatsapp.com/send?text=http://localhost/adop/detanimal/detanimal.php?id=<?php echo($fila['id']);?>" target="blank" ><i class="fab fa-whatsapp"></i></a>
                  <p>whatsapp</p>
                </div>

                <div id="iconos2">
                  <a href="http://wwwfacebook.com/sharer?u=http://localhost/adop/detanimal/detanimal.php?id=<?php echo($fila['id']);?>" target="blank"><i class="fab fa-facebook-f"></i></a>
                  <p>facebook</p>
                </div>
                
    </div>

 </div>
 
</body>
</html>