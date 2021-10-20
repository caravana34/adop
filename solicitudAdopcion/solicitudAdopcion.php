<?php
session_start();
if(($_SESSION['id']) != ''){

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Mascota</title>
    <!-- FONT AWESOME -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">-->
    <!--FONT OSWALD-->
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400 & display = swap "rel =" stylesheet ">
    <link href = "https://fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400 & display = swap "rel =" stylesheet ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./solicitudAdopcion.css">
</head>
<body>
<?php include('../config/conexion.php');
    $id=$_REQUEST['id'];
    $consulta="select * from animal where id='$id'";
    $resultado=mysqli_query($conexion,$consulta);
    $fila=mysqli_fetch_array($resultado);
    $consulta3="SELECT count(animal) FROM solicitud WHERE id='$id'";
    $resultado3=mysqli_query($conexion,$consulta3);
    $fila3=mysqli_fetch_array($resultado3);
    ?>
<div class="menu-btn">
        <i class="fas fa-bars"></i>

    </div>


    <div class="container5">
        <nav class="nav-main"><a href="../index.php" >
         <img src="../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
        
        <div class="grid">
            <div>
                <form action="insertar.php" method="POST" class="regis" enctype="multipart/form-data">
                    
            
                    Usuario<br><input type="text" name="correoElectronico" size="30" maxlength="50" placeholder="Correo Electronico"> <br><br>
                    Cédula<br><input type="file" name="cedula" size="30" maxlength="50" placeholder="Cédula"> <br><br>
                    Carta de voluntad<textarea name="cartaVoluntad"></textarea><br><br>
                    Animal<br><input type="text" name="animal" size="30" maxlength="50" value="<?php echo($fila['nombre']);?>"  placeholder="nombre de la mascota"> <br><br>
                    
                    <input class="btn1" type="submit" name="enviar" value="Enviar">
                 </form>
                   </div>

<div class="pasosSolicitud">
<p>#SOLICITUDES:<?php echo $fila3['count(animal)'];?></p>
                   <h1 class="sectiontitle"> Solicitud de adopción</h1>
                   <p class="parrafoSolicitud">Si quieres solicitar un animal en adopción debes seguir los siguientes pasos:</p>
                   <p class="parrafoSolicitud">1 - Registrate en el sitio web</p>
                   <p class="parrafoSolicitud">2 - Llenar el formulario de esta página con los documentos solicitados</p>
                   <p class="parrafoSolicitud">3 - Iniciar el proceso de adopción y estar dispuesto a concertar visitas y encuentros para formalizar el proceso</p>
                   <p class="parrafoSolicitud">4 - Atender y formalizar el proceso de adopción</p>
                   </div>
    </div>
    </div>
    

    <footer class="footer">
        <h4><a href="../index.php">Mi mascota copyright</a></h4>
    </footer>

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="../main.js"></script> 
</body>
</html>
<?php
}
else{
  header("location:../inicio/inicio.php");
}
?>