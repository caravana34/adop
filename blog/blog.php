
<?php include("../config/conexion.php");
//$consulta="select*from articulo";
//$resultado= mysqli_query($conexion, $consulta);
//$fila=mysqli_fetch_array($resultado);
$porpagina=3;
if(isset($_GET['mimascota'])){
    $pagina=$_GET['mimascota'];

}else{
    $pagina=1;
}
$inicio=($pagina-1)*$pagina;
$consulta="select * from animal where idEspecie=8 order by id desc limit $inicio,$porpagina";
$resultado=mysqli_query($conexion,$consulta);
$totalregistro=mysqli_num_rows($resultado);
$totalpagina=ceil($totalregistro/$porpagina);
$consulta1="select * from animal where idEspecie=9 order by id desc limit $inicio,$porpagina";
$resultado1=mysqli_query($conexion,$consulta1);
$totalregistro1=mysqli_num_rows($resultado1)
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Mascota</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--FONT OSWALD-->
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400 & display = swap "rel =" stylesheet ">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>


      <div class="csesion_btn">
        <a href="./inicio/cerrar.php">Cerrar sesión</a>   
      </div>
      
        <nav class="nav-main">
        <a href="../index.php"><img src="../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a>  
        
    </nav>


        <!--<nav class="nav-main"><a href="index.php" >
         <img src="./img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a>           
        </nav> 
        --->
           

        <!-- SHOWCASE -->
        <div class="container">
        <a href="https://api.whatsapp.com/send?text=http://localhost/adop/index.php" target="blank" id="btn-comp">Compartir este sitio web<i class="fas fa-angle-double-right"></i></a>
        <div ><center><h2 class= "titlerace" >Blog Mimascota</h1></center></div>
        <div class="grid">
        <div>
             <header class="showcase"> 
                <a href="./importanciaadopcion.php" class="btn1">Adoptar es importante<i class="fas fa-angle-double-right"></i> </a>
             </header>       
         </div>

             <div>
                <header class="showcase1"> 
                    <a href="./FormRegistroUsuario/formRegistroCliente.php" class="btn1"> Registro <i class="fas fa-angle-double-right"></i> </a>
                </header>           
            </div>

                <div>
                    <header class="showcase2"> 
                        <a href="../adop/inicio/inicio.php" class="btn1">Iniciar Sesión<i class="fas fa-angle-double-right"></i></a>
                    </header>               
                </div>
            </div>

            
                </div>
                </div>
        </div>
        
    </div>
</div>
</div>

<footer class="footer_container">
<hr>
     

<div class="grid3">

    <div >
      <a href="http://oferta.senasofiaplus.edu.co" target="blank"><img src="../img/logo-de-Sena-sin-fondo-Blanco-300x300.png" alt="Logo Mimascota" id="footer_logo2"></a>
    </div>
    <div > 
      
        <a href="https://www.cesde.edu.co/" target="blank"><img src="../img/descarga (1).png" alt="Logo Mimascota" id="footer_logo3"></a>
      </div>
      <div>
        <a href="index.php"><img src="../img/DERECHO-ANIMAL-brand.png" alt="Logo Mimascota" id="footer_logo1"></a>  
     </div> 

    <div> <p>Developers: <br>Elias Rodriguez<br>JBAD Gómez</p> </div>
    <div>         
       

        <p>Contacto:  <br>eliasjoserodriguez@hotmail.com <br>3002003328 <br> gomezposadadario@gmail.com<br>3148520270</p>

    </div>


  

</div>
<br>
<hr>
         
</footer>
</div>
<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.js"></script>
<script src="../main.js"></script>

</body>

</html>