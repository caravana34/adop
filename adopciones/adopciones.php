
<?php include("../config/conexion.php");
//$consulta="select*from articulo";
//$resultado= mysqli_query($conexion, $consulta);
//$fila=mysqli_fetch_array($resultado);
//$totalpagina=1;
//$totalpagina1=1;
//$porpagina=$totalpagina;
//$porpagina1=$totalpagina1;
//if(isset($_GET['mimascota'])){
    //$pagina=$_GET['mimascota'];

//}else{
//    $pagina=1;
//}
//$inicio=($pagina-1)*$pagina;
$consulta="select * from animal where idEspecie=8  ";
$consulta1="select * from animal where idEspecie=9  ";
$resultado=mysqli_query($conexion,$consulta);
$resultado1=mysqli_query($conexion,$consulta1);
//$totalregistro=mysqli_num_rows($resultado);
//$totalregistro1=mysqli_num_rows($resultado1);
//$totalpagina=ceil($totalregistro/$porpagina);
//$totalpagina1=ceil($totalregistro1/$porpagina1)-->
?>

<?php
session_start();
if(($_SESSION['id']) != ''){

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="adopciones.css">
    <title>Adopciones</title>
    
</head>
<body>
 
    <!--<div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>-->
   
    <nav class="nav-main"><div class="csesion_btn">
    <a href="../inicio/cerrar.php">Cerrar sesión</a>   
    </div>
    <a href="./../index.php"><img src="../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a>  
    </nav>
    

    <div class="container">
    
     <div class="categorias">
        <h2>Elige tu dog amigo</h2>
     </div>             
       
            <div class="grid2"><!--grilla de 2 columnas-->
            <?php foreach($resultado as $dato):?> 
                <div class="nested_grid"> 
                    <img class="img" src="data:image/webp;base64,
                        <?php echo base64_encode($dato['imagen']);?>" >
                      
                
              <div class="descripcion">
                   
                    <p>Nombre:   <?php echo($dato['nombre']);?></p>
                    <p>Sexo:     <?php echo($dato['sexo']);?></p>
                    <p>Color:    <?php echo($dato['color']);?></p>
                    <p>Edad:     <?php echo($dato['edad']);?></p>
                    <p>Tamaño:   <?php echo($dato['tamano']);?></p>
                    <hr>
                    <p>Personalidad:    <?php echo($dato['CaracPersonalidad']);?></p><br>
            
                    <a href="../detanimal/detanimal.php?id=<?php echo $dato['id'];?>" class="btn">Conocer más<i class="fas fa-angle-double-right"></i></a>
                    <a href="comparte.php?id=<?php echo $dato['id'];?>" id="btn-abrir-popup" class="btn-abrir-popup" target="popup" onclick="window.open('http://localhost/adop/adopciones/comparte.php?id=<?php echo $dato['id'];?>','popup','width=600,height=600'); return false;">Comparte</a>   
                    
                </div> 
                
                </div>
                
                <?php endforeach?>
          </div>


          <div class="categorias">
            <h2>Elige tu cat amigo</h2>
    </div>             


          <div class="grid2"><!--grilla de 2 columnas-->
            <?php foreach($resultado1 as $dato):?> 
                <div class="nested_grid"> 
                    <img class="img" src="data:image/webp;base64,
                        <?php echo base64_encode($dato['imagen']);?>" >
                      
                
              <div class="descripcion">
                   
                   <p>Nombre:  <?php echo($dato['nombre']);?></p>
                   <p>Sexo:    <?php echo($dato['sexo']);?></p>
                   <p>Color:  <?php echo($dato['color']);?></p>
                   <p>Edad:   <?php echo($dato['edad']);?></p>
                   <p>Tamaño:  <?php echo($dato['tamano']);?></p>
                   <hr>
                   <p>Personalidad:    <?php echo($dato['CaracPersonalidad']);?></p>
                   
                        <a href="../detanimal/detanimal.php?id=<?php echo $dato['id']; ?>" class="btn">Conocer más<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="https://api.whatsapp.com/send?text=http://localhost/adop/detanimal/detanimal.php?id=<?php echo($dato['id']);?>" target="blank" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   
                        
                </div> 
                
                </div>
                <?php endforeach?>
          </div>
               

 <!--ventana ememrgente compartir -->
 
 
 <!--ventana ememrgente compartir -->



          </div>

<!--footer-->    
<footer class="footer_container">
<hr>
     

<div class="grid3">

    <div >
      <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="../img/logo-de-Sena-sin-fondo-Blanco-300x300.png" alt="Logo Mimascota" id="footer_logo2"></a>
    </div>
    <div > 
      
        <a href="https://www.cesde.edu.co/"><img src="../img/descarga (1).png" alt="Logo Mimascota" id="footer_logo3"></a>
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
<!--footer-->   


<!--ventana emergente-->


<!--ventana emergente-->


<!-- scroll reveal -->

<!--<script src="https://unpkg.com/scrollreveal"></script>-->

<!-- custom js -->
<!---<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.js"></script>
<script src="main.js"></script>-->


<script src="popup.js">

</script>
</body>
</html>

<?php
}
else{
  header("location:../inicio/inicio.php");
}
?>
