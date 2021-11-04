
<?php
session_start();
if(($_SESSION['id']) != ''){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./solicitudAdopcion.css">
    <title>Consulta Solicitud Adopcion</title>
</head>
<body>
<div class="container5">
<nav class="nav-main"><a href="../index.php" >
         <img src="../img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
        <center>
    <a href=".././solicitudAdopcion/consultaSolicitudAdopcion.php" id="btn-comp2">Módulo Adopción</a>
    <a href=".././registroAnimal/registroAnimal.php" id="btn-comp2">Módulo Animal</a>
    <a href=".././FormRegistroUsuario/consultaRegistroCliente.php" id="btn-comp2">Módulo Usuarios</a>
    <a href=".././blog/blogform.php" id="btn-comp2">Blog</a>
    <a href=".././FormRegistroUsuario/formRegistroAdministrador.php" id="btn-comp2">AdminRegister</a>
    
        </center>
    <center>
    <h1 class="titlerace">Solicitudes de Adopción</h1>
    <table class="regis" >
    <thead>
            <tr>
            <th>Id</th>
            <th>Correo electronico</th>
            <th>Cedula</th>
            <th>Carta de voluntad</th>
            <th>Animal</th>
            <th colspan="2">Operacion</th>
            
</tr>
        </thead>

        <tbody>
        
        <?php 
        include('../config/conexion.php');
        $consulta="select * from solicitud";
$resultado=mysqli_query($conexion,$consulta);
while($fila=mysqli_fetch_array($resultado)) // ciclo mientras para ordenar en la estructura los campos
{
    echo"<tr>";
    echo"<td>".$fila['id'];
    echo"<td>".$fila['correoElectronico'];
    echo"<td>" ?> <img height="50px" src="data:image/jpg;base64,
    <?php echo base64_encode($fila['cedula']);?>"/>
   <?php
    echo"<td>".$fila['cartaVoluntad'];
    echo"<td>".$fila['animal'];
    ?>
    </td>
    
    

    <td><a href="modificar.php?id=<?php echo $fila['id']; ?>" class="btn1"> Modificar </a></th>

    <td><a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn1"> Eliminar </a></th>
    
    <?php echo"<tr>";
    
}?>
        </tbody>

    </table>
    
    </center>
    <div>
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

<script src="../main.js"></script> 
</body>
</html><?php
}
else{
  header("location:../inicio/inicio.php");
}
?>

