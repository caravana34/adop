<!DOCTYPE html>
<html lang="es">
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
    <link rel="stylesheet" href="./detanimal.css">
</head>
<body>
<?php include('../config/conexion.php');
    $id=$_REQUEST['id'];
    $idRaza=$_REQUEST['idRaza'];
    $consulta="select * from animal where id='$id' ";
    $resultado=mysqli_query($conexion,$consulta);
    $fila=mysqli_fetch_array($resultado);

    

    $consulta2="select * from raza where id='$id'";
    $resultado2=mysqli_query($conexion,$consulta2);
    $fila2=mysqli_fetch_array($resultado2);?>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>


    <div class="container">
            <nav class="nav-main"><a href="../index.php" >
            <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a>           
            </nav> 


            <div class="row">
                    <div class="col-30">
                        <img src="data:image/jpg;base64,
                <?php echo base64_encode($fila['imagen']);?>" alt="">

                    </div> 

                    <div class="col-70">

                        <div class="textdetanimal">

                            <h2><?php echo $fila['nombre'];?></h2>
                            <p>Edad:<?php echo $fila['edad'];?></p>
                            <p>Sexo:<?php echo $fila['sexo'];?></p>
                            <p>Color:<?php echo $fila['color'];?></p>
                            <p>Raza:<?php echo $fila['idRaza'];?></p>
                            <p>Raza:<?php echo $fila2['nombre'];?></p>
                            <p><?php echo $fila['CaracPersonalidad'];?></p>
                   </div>
                        <div class="btn11">
                            <a href="../solicitudAdopcion/solicitudAdopcion.php?id=<?php echo $fila['id']; ?>" class="btn"> Adoptar<i class="fas fa-angle-double-right"></i></a>
                       </div> 
                       
                        
            
                    </div> 

            </div>

            <div class="row">
                

             </div>
        
    </div>
</div>
        
<footer class="footer">
    <h4><a href="../index.html">Mi mascota copyright</a></h4>
</footer>

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="../main.js"></script>

</body>
</html>