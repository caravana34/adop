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

    <nav class="nav-main"><a href="./../index.php" >
        <img src="../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a>       
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
                   <div class="d1"><h2>Descripción</h2></div><br>
                    <p>Nomobre:   <?php echo($dato['nombre']);?></p>
                    <p>Sexo:     <?php echo($dato['sexo']);?></p>
                    <p>Color:    <?php echo($dato['color']);?></p>
                    <p>Edad:     <?php echo($dato['edad']);?></p>
                    <p>Tamaño:   <?php echo($dato['tamano']);?></p><br>
                    <p>Personalidad:    <?php echo($dato['CaracPersonalidad']);?></p><br>
            
                        <a href="../detanimal/detanimal.php?id=<?php echo $dato['id']; ?>" class="btn">Conocer más<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   
                        
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
                   <div class="d1"><h2>Descripción</h2></div><br>
                   <p>Nomobre:  <?php echo($dato['nombre']);?></p>
                   <p>Sexo:    <?php echo($dato['sexo']);?></p>
                   <p>Color:  <?php echo($dato['color']);?></p>
                   <p>Edad:   <?php echo($dato['edad']);?></p>
                   <p>Tamaño:  <?php echo($dato['tamano']);?></p><br>
                   <p>Personalidad:    <?php echo($dato['CaracPersonalidad']);?></p><br>
                   
                        <a href="../detanimal/detanimal.php?id=<?php echo $dato['id']; ?>" class="btn">Conocer más<i class="fas fa-angle-double-right"></i></a>
                        
                        <a href="#" class="btn">Comparte<i class="fas fa-angle-double-right"></i></a>   
                        
                </div> 
                
                </div>
                <?php endforeach?>
          </div>

          </div>

          
          <footer class="footer">
    <h3><a href="index.php">Mi mascota copyright</a></h3>
    <div class="footerdatos">
       
    </div>
</footer>

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.js"></script>
<script src="main.js"></script>


</body>
</html>