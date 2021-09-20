<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./FormRegistroUsuario.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400 & display = swap "rel =" stylesheet ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>

    </div>


    <div class="container5">
        <nav class="nav-main"><a href="./../index.html" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
        
        
            <div>
                <form class="regis" action="./insertarAninmal.php" method="POST" enctype="multipart/form-data">
                    Nombre <br><input type="text" name="nombre" size="30" maxlength="50" placeholder="Nombre" required> <br><br>
                    Raza <br><input type="text" name="raza" size="30" maxlength="50" placeholder="Raza" required> <br><br>
                    
                    Color<br> <input class="place" type="text" name="color" size="30" maxlength="50" placeholder="Colores" required> <br><br>
                    Tamaño<br><input class="place"  type="text" name="tamaño" size="30" maxlength="50" placeholder="Grande, mediana o pequeña" required> <br><br>    
                    Características de personalidad <br> <textarea class="place" placeholder="Cuentanos sobre tu mascota" name="cartaVoluntad" required></textarea>  <br><br>
                    Imagen<br><input type="file" name="imagen" size="30" maxlength="50" placeholder="Imagen Mascota" required> <br><br>
                    <!--Estado <br><input class="place"  type="text" name="Estado" size="30" maxlength="50" placeholder="Descripción"> <br><br>-->
                    
                    <input class="btn1" type="submit" name="enviar" value="Iniciar">
                 </form>


        
            </div>
        
    </div>

    

    <footer class="footer">
        <h4><a href="./../index.html">Mi mascota copyright</a></h4>
    </footer>

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="main.js"></script>
</body>

</html>