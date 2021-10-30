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
        <h2 class="titlerace">Elige tu dog amigo</h2>
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
            <h2 class="titlerace">Elige tu cat amigo</h2>
    </div>             


          <div class="grid2"><!--grilla de 2 columnas-->
            <?php foreach($resultado1 as $dato):?> 
                <div class="nested_grid"> 
                    <img class="img" src="data:image/webp;base64,
                        <?php echo base64_encode($dato['imagen']);?>" >
                      
                
              <div class="descripcion">
                   
                   <p>Nombre:  <?php echo($dato['nombre']);?></p>
                   <p>Sexo:    <?php echo($dato['sexo']);?></p>
                …
