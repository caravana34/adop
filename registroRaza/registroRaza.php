<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="./FormRegistroUsuario.css">
</head>
<body>
<div class="menu-btn">
        <i class="fas fa-bars"></i>

    </div>


    <div class="container5">
    <nav class="nav-main"><a href="./../index.php" >
         <img src="./../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
        <center>
    <a href=".././solicitudAdopcion/consultaSolicitudAdopcion.php" id="btn-comp2">Módulo Adopción</a>
    <a href=".././registroAnimal/registroAnimal.php" id="btn-comp2">Módulo Animal</a>
    <a href=".././FormRegistroUsuario/consultaRegistroCliente.php" id="btn-comp2">Módulo Usuarios</a>
    <a href=".././FormRegistroUsuario/formRegistroAdministrador.php" id="btn-comp2">AdminRegister</a>
    
        </center>
        
        
            <div>
            <center><h2 class="titlerace">Registro Raza</h1>
                <form action="insertar.php" method="POST" class="regis1" enctype="multipart/form-data">
                    
                    Nombre<br><input type="text" name="nombre" size="30" maxlength="50" placeholder="Nombre de la raza" required> <br><br>
                    idEspecie<br><input type="number" name="idEspecie" placeholder="id de la especie" required> <br><br>
                    <input class="btn1" type="submit" name="enviar" value="Enviar">
                 </form></center>
                   </div><br><br>
                   <center><h2 class="titlerace">Tabla de Especie</h2>
    <table class="regis" >
    <thead>
            <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th colspan="2">Operacion</th>
            
            
</tr>
        </thead>

        <tbody>
        
        <?php 
        include('../config/conexion.php');
        $consulta="select * from especie";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultado)) // ciclo mientras para ordenar en la estructura los campos
{
    echo"<tr>";
    echo"<td>".$fila['id'];
    
    echo"<td>".$fila['nombre'];
    
    ?> 
    
     </td>

    <td><a class="btn1" href="../registroEspecie/modificar.php?id=<?php echo $fila['id']; ?>"> Modificar </a></th>

    <td><a class="btn1" href="../registroEspecie/eliminar.php?id=<?php echo $fila['id']; ?>"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>
    </center>
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

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="../main.js"></script> 
</body>
</html>