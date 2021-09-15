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
                <form class="regis" action="insertar.php" method="POST" enctype="multipart/form-data">
                    Identificación <br><input type="text" name="identificacion" size="30" maxlength="50" placeholder="Identificación"> <br><br>
                    Nombre   <br> <input type="text" name="nombre" size="30" maxlength="50" placeholder="Nombres y apellidos"> <br><br>
                    
                    Ciudad  <br> <input class="place" type="text" name="ciudad" size="30" maxlength="50" placeholder="Ciudad de Residencia"> <br><br>
                    Correo <br>   <input class="place"  type="text" name="correo" size="30" maxlength="50" placeholder="Su Correo Electrónico"> <br><br>    
                    Telefono <br>  <input class="place"  type="text" name="telefono" size="30" maxlength="50" placeholder="Número de Celular"> <br><br>
                    Contraseña <br><input class="place"  type="text" name="contrasena" size="30" maxlength="50" placeholder="Contraseña"> <br><br>
                    Estado <br><input class="place"  type="text" name="estado" size="30" maxlength="50" placeholder="Descripción"> <br><br>
                    IdTipoUsuario <br><input class="place" type="number" name="idTipoUsuario" size="30" maxlength="50" placeholder="Contraseña"> <br><br>
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
















