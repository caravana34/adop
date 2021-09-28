<?php include("./config/conexion.php");
//$consulta="select*from articulo";
//$resultado= mysqli_query($conexion, $consulta);
//$fila=mysqli_fetch_array($resultado);
$porpagina=2;
if(isset($_GET['mimascota'])){
    $pagina=$_GET['mimascota'];

}else{
    $pagina=1;
}
$inicio=($pagina-1)*$pagina;
$consulta="select * from animal limit $inicio,$porpagina";
$resultado=mysqli_query($conexion,$consulta);
$totalregistro=mysqli_num_rows($resultado);
$totalpagina=ceil($totalregistro/$porpagina)

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopciones</title>
    <link rel="stylesheet" href="adopciones.css">
</head>
<body>
 
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>


    <div class="container">
    <nav class="nav-main"><a href="./../index.php" >
         <img src="../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a>           
    </nav> 
   
     
    <div class="categorias">
        <h2>Elige tu mejor amigo</h2>
    </div>             
       

               

    <div class="grid2"><!--grilla de 2 columnas-->
   
        <?php foreach($resultado as $dato):?>  
            <div class="nested_grid"> 
                     
                 <img src="data:image/webp;base64,
    <?php echo base64_encode($dato['imagen']);?>" >
                </div>
                
                <div class="descripcion">
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt recusandae libero tenetur molestias ducimus at similique excepturi temporibus in, facere saepe, dolorem consequatur nobis, ea repellat cum beatae incidunt ipsa molestiae explicabo. Iure voluptatibus magni maxime adipisci exercitationem, nemo a facilis error eius eligendi quidem. Eius dolore cum et!</p>

                   
                        <a href="../solicitudAdopcion/solicitudAdopcion.php" class="btn">Adoptar<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   

                </div> 
          </div>

             
            <?php endforeach?>







            <div>
               
            </div>





           
        
           

           


















          <div class="nested_grid">  
            <div>
                 <img  src="../img/gato destacados2.jpg" >
            </div>

                <div class="descripcion">
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt recusandae libero tenetur molestias ducimus at similique excepturi temporibus in, facere saepe, dolorem consequatur nobis, ea repellat cum beatae incidunt ipsa molestiae explicabo. Iure voluptatibus magni maxime adipisci exercitationem, nemo a facilis error eius eligendi quidem. Eius dolore cum et!</p>

                   
                        <a href="../solicitudAdopcion/solicitudAdopcion.php" class="btn">Adoptar<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   

                </div> 
          </div>


          <div class="nested_grid">    
            <div>        
                 <img  src="../img/gato destacados2.jpg" >
            </div>

                <div class="descripcion">
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt recusandae libero tenetur molestias ducimus at similique excepturi temporibus in, facere saepe, dolorem consequatur nobis, ea repellat cum beatae incidunt ipsa molestiae explicabo. Iure voluptatibus magni maxime adipisci exercitationem, nemo a facilis error eius eligendi quidem. Eius dolore cum et!</p>

                   
                        <a href="../solicitudAdopcion/solicitudAdopcion.php" class="btn">Adoptar<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   

                </div> 
          </div>

        
          <div class="nested_grid">              
            <div>
                 <img  src="../img/gato destacados2.jpg" >
            </div>

                <div class="descripcion">
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt recusandae libero tenetur molestias ducimus at similique excepturi temporibus in, facere saepe, dolorem consequatur nobis, ea repellat cum beatae incidunt ipsa molestiae explicabo. Iure voluptatibus magni maxime adipisci exercitationem, nemo a facilis error eius eligendi quidem. Eius dolore cum et!</p>

                   
                        <a href="../solicitudAdopcion/solicitudAdopcion.php" class="btn">Adoptar<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   

                </div> 
          </div>


          <div class="nested_grid">              
            <div>
                 <img  src="../img/gato destacados2.jpg" >
            </div>

                <div class="descripcion">
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt recusandae libero tenetur molestias ducimus at similique excepturi temporibus in, facere saepe, dolorem consequatur nobis, ea repellat cum beatae incidunt ipsa molestiae explicabo. Iure voluptatibus magni maxime adipisci exercitationem, nemo a facilis error eius eligendi quidem. Eius dolore cum et!</p>

                   
                        <a href="../solicitudAdopcion/solicitudAdopcion.php" class="btn">Adoptar<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   

                </div> 
          </div>


          <div class="nested_grid">              
            <div>
                 <img  src="../img/gato destacados2.jpg" >
            </div>

                <div class="descripcion">
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt recusandae libero tenetur molestias ducimus at similique excepturi temporibus in, facere saepe, dolorem consequatur nobis, ea repellat cum beatae incidunt ipsa molestiae explicabo. Iure voluptatibus magni maxime adipisci exercitationem, nemo a facilis error eius eligendi quidem. Eius dolore cum et!</p>

                   
                        <a href="../solicitudAdopcion/solicitudAdopcion.php" class="btn">Adoptar<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   
                   
                </div> 
          </div>


          <div class="nested_grid">
              <div>             
                 <img  src="../img/gato destacados2.jpg" >
            </div>

                <div class="descripcion">
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt recusandae libero tenetur molestias ducimus at similique excepturi temporibus in, facere saepe, dolorem consequatur nobis, ea repellat cum beatae incidunt ipsa molestiae explicabo. Iure voluptatibus magni maxime adipisci exercitationem, nemo a facilis error eius eligendi quidem. Eius dolore cum et!</p>

                   
                        <a href="../solicitudAdopcion/solicitudAdopcion.php" class="btn">Adoptar<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   
                   
                </div> 
            </div>


          <div class="nested_grid">              
            <div>
                 <img  src="../img/gato destacados2.jpg" >
            </div>

                <div class="descripcion">
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda deserunt recusandae libero tenetur molestias ducimus at similique excepturi temporibus in, facere saepe, dolorem consequatur nobis, ea repellat cum beatae incidunt ipsa molestiae explicabo. Iure voluptatibus magni maxime adipisci exercitationem, nemo a facilis error eius eligendi quidem. Eius dolore cum et!</p>

                   
                        <a href="../solicitudAdopcion/solicitudAdopcion.php" class="btn">Adoptar<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   
                   
                </div> 
          </div>
        </div>
        </div>
        
        <footer class="footer">
            <h3>Mi mascota copyright</h3>
        </footer>

</body>
</html>