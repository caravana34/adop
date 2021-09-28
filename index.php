
<?php include("./config/conexion.php");
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
$consulta="select * from animal where idEspecie=8 limit $inicio,$porpagina";
$resultado=mysqli_query($conexion,$consulta);
$totalregistro=mysqli_num_rows($resultado);
$totalpagina=ceil($totalregistro/$porpagina);
$consulta1="select * from animal where idEspecie=9 limit $inicio,$porpagina";
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
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>


    <div class="container">
        <nav class="nav-main"><a href="index.php" >
         <img src="./img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a>           
        </nav> 
        
        <!-- SHOWCASE -->
        <div class="grid">
        <div>
             <header class="showcase"> 
                <a href="./adopciones/adopciones.php" class="btn1">Adopciones<i class="fas fa-angle-double-right"></i> </a>
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

            <div class="parrmid">

                <h2>LA IMPORTANCIA DE LA ADOPCIÓN</h2>
                <p>Adoptar una mascota enriquece la vida y abre las puertas a una época de diversión, descubrimientos, juegos y mimos. Sin embargo, implica  también asumir la responsabilidad de cuidar del animal durante muchos años, proporcionándole comida, un lugar seguro donde vivir, cuidados veterinarios y preocupándonos de satisfacer sus necesidades en cuanto a actividad y cariño.</p>
    
    
            
        </div>
        
            
    
            <div class="carousel">
                <div class="carousel__contenedor">
                    <button aria-label="Anterior" class="carousel__anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>
    
                    <div class="carousel__lista">
                        <div class="carousel__elemento">
                            <img src="./img/animales/dogs/dog1.webp" alt="Rock and Roll Hall of Fame">
                            <p>Rock and Roll Hall of Fame</p>
                        </div>
                        <div class="carousel__elemento">
                            <img src="./img/animales/dogs/dog2.webp" alt="Constitution Square - Tower I">
                            <p>Constitution Square - Tower I</p>
                        </div>
                        <div class="carousel__elemento">
                            <img src="./img/animales/dogs/dog3.webp" alt="Empire State Building">
                            <p>Empire State Building</p>
                        </div>
                        <div class="carousel__elemento">
                            <img src="./img/animales/dogs/dog4.webp" alt="Harmony Tower">
                            <p>Harmony Tower</p>
                        </div>
        
                        <div class="carousel__elemento">
                            <img src="./img/animales/dogs/dog5.webp" alt="Empire State Building">
                            <p>Empire State Building</p>
                        </div>
                        <div class="carousel__elemento">
                            <img src="./img/animales/dogs/dog6.webp" alt="Harmony Tower">
                            <p>Harmony Tower</p>
                        </div>
                        <div class="carousel__elemento">
                            <img src="./img/animales/dogs/dog7.webp" alt="Empire State Building">
                            <p>Empire State Building</p>
                        </div>
                        <div class="carousel__elemento">
                            <img src="./img/animales/dogs/dog8.webp" alt="Harmony Tower">
                            <p>Harmony Tower</p>
                        </div>
                    </div>
    
                    <button aria-label="Siguiente" class="carousel__siguiente">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
    
                <div role="tablist" class="carousel__indicadores"></div>
            </div>
        
        
        <div class="gridcan4">
        <div class="">
            <div><h2 class="title-section">CANINOS</h2></div>
            <div class="parrmid"><p>El perro (Canis familiaris o Canis lupus Familiaris), dependiendo si se le considera una especie por derecho propio o una subespecie del lobo), llamado perro doméstico o can. 
                El perro es famoso por ser denominado el mejor amigo del hombre, este animal inteligente y leal a sus amos ha estado ligado a hombres y mujeres desde milenios, en el mundo existen gran variedad de razas determinadas por la forma y pelaje del perro.</p>
                </div> 
                <div class="gridcanids">
                    <div clas=""><img src="./img/animals3.webp" alt=""></div>
                    <div class=""><img src="./img/animals4.webp" alt=""></div>
                    <div class=""><img src="./img/animals.webp" alt=""></div>
                </div>
               
                <div class="caresdogs">
                    <div class="parrmid">
                <p>Los perros se caracterizan por tener un olfato y oído muy sensibles, son animales que se consideran omnívoros, es decir comen toda clase de comida, desde carne, frutas hasta vegetales, algunas razas han sido compañeras de caza de los humanos desde épocas remotas, esta asociación entre humanos y caninos ha permitido la adaptación de estos animales a la domesticación total.</p>
                
                <p>En los hogares se debe procurar alimentar y brindar un cuidado equilibrado para estos animales, que se han convertido en integrantes primordiales de muchas familias, cuidar o estar a cargo de un perro implica brindarle los cuidados emocionales y físicos:</p>
                
                <p>- Trato amable, Brindar cariño y cuidado.
                    <p>- Alimento saludable acorde a las necesidades calóricas de la mascota y su estilo de vida.
                    </p>
                    <p>- Pasear o permitir el libre movimiento para su desarrollo físico.</p>
                    <p>- Asear de manera regular y adecuada.</p>
                </div>

                <div class="cares1">
                  <div><img clas="row" src="./img/animals5.png" alt=""></div>
                 <!-- <div><img clas="row" src="./img/animals4.webp" alt=""></div>-->
                  
                  
                </div>
                </div>
                </div>
        </div>
       <!-- <div><img src="./img/animales/dogs/dog11.jpg" alt=""></div>-->

    

        <div class="adopindex"><!--grilla de 2 columnas-->
        <?php foreach($resultado as $dato):?>  
            <div class="grid4">   
                     
                <div class="animal1">
                 <img src="data:image/webp;base64,
    <?php echo base64_encode($dato['imagen']);?>" >
                </div>
                
                <div class="anibtn">
                    <a href="./detanimal/detanimal.html" class="btn">Conocer mas<i class="fas fa-angle-double-right"></i> </a>               
                </div>
            </div>
            <?php endforeach?>
            

        </div>
        <div >

            <h2 class="title-section" >FELINOS</h2>
            


        
    </div>
    
        <div class="adopindex"><!--grilla de 2 columnas-->

        <?php foreach($resultado1 as $dato):?>  
            <div class="grid4">   
                     
                <div class="animal1">
                 <img src="data:image/webp;base64,
    <?php echo base64_encode($dato['imagen']);?>" >
                </div>
                
                <div class="anibtn">
                    <a href="./detanimal/detanimal.html" class="btn">Conocer mas<i class="fas fa-angle-double-right"></i> </a>               
                </div>
            </div>
            <?php endforeach?>
            

        </div>
                
                
           
           <div class="pcta">

            <h2 class="title-section2">PIÉNSALO BIEN</h2>
            <p>Si quieres tener la 
                compañía de una mascota 
                debes tener en cuenta que 
                también implica unas responsabilidades.</p>
    </div> 
</div>
</div>

<footer class="footer">
    <h4><a href="index.php">Mi mascota copyright</a></h4>
</footer>

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.js"></script>
<script src="main.js"></script>

</body>

</html>