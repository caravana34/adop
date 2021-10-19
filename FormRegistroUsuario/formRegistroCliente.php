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
        <nav class="nav-main"><a href="./../index.php" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
        
        
            <div>
                <form class="regis" action="./insertarcliente.php" method="POST" enctype="multipart/form-data">
                    Identificación <br><input type="text" name="identificacion" size="30" maxlength="50" placeholder="Identificación" required> <br><br>
                    Nombre   <br> <input type="text" name="nombre" size="30" maxlength="50" placeholder="Nombres y apellidos" required> <br><br>
                    
                    Ciudad  <br> <input class="place" type="text" name="ciudad" size="30" maxlength="50" placeholder="Ciudad de Residencia" required> <br><br>
                    Correo <br>   <input class="place"  type="text" name="correo" size="30" maxlength="50" placeholder="Su Correo Electrónico" required> <br><br>    
                    Telefono <br>  <input class="place"  type="text" name="telefono" size="30" maxlength="50" placeholder="Número de Celular" required> <br><br>
                    Contraseña <br><input class="place"  type="password" name="contrasena" size="30" maxlength="50" placeholder="Contraseña"required> <br><br>
                    <!--Estado <br><input class="place"  type="text" name="Estado" size="30" maxlength="50" placeholder="Descripción"> <br><br>-->
                    
                    <input class="btn1" type="submit" name="enviar" value="Iniciar">
                 </form>


        
            </div>
        
            </div>

    

            <footer class="footer_container">
<hr>
     

<div class="grid3">

    <div >
      <a href=""><img src="../img/logo-de-Sena-sin-fondo-Blanco-300x300.png" alt="Logo Mimascota" id="footer_logo2"></a>
    </div>
    <div > 
      
        <a href=""><img src="../img/descarga (1).png" alt="Logo Mimascota" id="footer_logo3"></a>
      </div>
      <div>
        <a href="./../index.php"><img src="../img/DERECHO-ANIMAL-brand.png" alt="Logo Mimascota" id="footer_logo1"></a>  
     </div> 

    <div> <p>Developers: <br>Elias Rodriguez<br>JBAD Gómez</p> </div>
    <div>         
       

        <p>Contacto:  <br>eliasjoserodriguez@hotmail.com <br>3002003328 <br> gomezposadadario@gmail.com<br>3148520270</p>
            
                            
    </div>


  

</div>
<br>
<hr>
         
</footer>
    
<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="main.js"></script>
</body>

</html>
















