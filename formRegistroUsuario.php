
<!--<?php 
    require "config/conexion.php";
    error_reporting(0);
    $identificacion = $_POST['Identificacion'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $btnGuardar = $_POST['btnGuardar'];
    if(isset($btnGuardar)){
        $sql = "INSERT INTO usuarios(identificacion,nombres,apellidos,telefono,fechaNacimiento, direccion, correo)VALUES($identificacion,'$nombres','$apellidos',$telefono, '$fechaNacimiento','$direccion','$correo')";
        if($conexion->query($sql)){
            echo 'GUARDADO CORRECTAMENTE';
        }else{
            echo 'ERROR';
        }
    }
?>-->

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
        <nav class="nav-main"><a href="index.html" >
         <img src="img/brand1-01.svg" alt="Logo Mimascota" class="nav-brand"></a> 
           
        </nav> 
        
        
            <div>
                <form class="regis">
                    Identificación <br><input type="text" name="nombresUsuario" size="30" maxlength="50" placeholder="Identificación"> <br><br>
                    Nombre   <br> <input type="text" name="ApellidosUsuario" size="30" maxlength="50" placeholder="Nombres y apellidos"> <br><br>
                    
                    Ciudad  <br> <input type="text" name="municipio" size="30" maxlength="50" placeholder="ciudad de residencia"> <br><br>
                    Celular  <br>   <input type="text" name="ApellidosUsuario" size="30" maxlength="50" placeholder="Su numero celular"> <br><br>    
            
                    Correo      <br>           <input type="text" name="correoElectronico" size="30" maxlength="50" placeholder="Correo Electronico"> <br><br>
                    Confirma tu correo <br>    <input type="text" name="correoElectronico" size="30" maxlength="50" placeholder="E-mail"> <br><br>
                    Contraseña        <br>     <input type="text" name="contrasena" size="30" maxlength="50" placeholder="Contraseña"> <br><br>
                    Confirma tu contraseña <br><input type="text" name="contrasena" size="30" maxlength="50" placeholder="Confirma tu contraseña"> <br><br>
                    <input class="btn1" type="submit" name="btn" value="Iniciar">
                 </form>


        
            </div>
        
    </div>

    

<footer class="footer">
    <h3>Mi mascota copyright</h3>
</footer>

<!-- scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- custom js -->

<script src="main.js"></script>
</body>

</html>
















<!--?php 
    require "config/conexion.php";
    error_reporting(0);
    $identificacion = $_POST['Identificacion'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $btnGuardar = $_POST['btnGuardar'];
    if(isset($btnGuardar)){
        $sql = "INSERT INTO usuario(identificacion,nombre,apellidos,correo,fechaNacimiento, direccion, correo)VALUES($identificacion,'$nombres','$apellidos',$telefono, '$fechaNacimiento','$direccion','$correo')";
        if($conexion->query($sql)){
            echo 'GUARDADO CORRECTAMENTE';
        }else{
            echo 'ERROR';
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DERECHO ANIMAL</title>
    <!-- FONT AWESOME 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--FONT OSWALD
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400 & display = swap "rel =" stylesheet ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    -->
    <!-- CUSTOM CSS 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <nav class="nav-main"><a href="index.html" >
            <img src="img/DERECHO ANIMAL brand.png" alt="Logo Elix" class="nav-brand"></a>
            <ul class="nav-menu show">
            <li>
                <a href="#">Dar en adopción</a>
            </li> 
            
            <li>
                <a href="preregistro.html">Iniciar sesión</a>
            </li> 


            </ul>
            <ul class="nav-menu-right">
                <li>
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
        </nav> 
</div>
<br>
    <div class="regis"><form method="post" action="formRegistroUsuario.php">
        Identificación <input type="text" name="identificacion" size="30" maxlength="50" placeholder="Aqui primer y segundo nombre"> <br><br>
        Nombre    <input type="text" name="ApellidosUsuario" size="30" maxlength="50" placeholder="Sus apellidos"> <br><br>
        Apellidos        <input type="text" name="nombresUsuario" size="30" maxlength="50" placeholder="País de residencia"> <br><br>
        Correo   <input type="text" name="ApellidosUsuario" size="30" maxlength="50" placeholder="ciudad de residencia"> <br><br>
        Celular     <input type="text" name="ApellidosUsuario" size="30" maxlength="50" placeholder="Su numero celular"> <br><br>    

        Correo                 <input type="text" name="nombresUsuario" size="30" maxlength="50" placeholder="Aqui primer y segundo nombre"> <br><br>
        Confirma tu correo     <input type="text" name="ApellidosUsuario" size="30" maxlength="50" placeholder="Sus apellidos"> <br><br>
        Contraseña             <input type="text" name="nombresUsuario" size="30" maxlength="50" placeholder="País de residencia"> <br><br>
        Confirma tu contraseña <input type="text" name="nombresUsuario" size="30" maxlength="50" placeholder="País de residencia"> <br><br>
        <input type="submit" name="btnGuardar" value="GUARDAR"></form></div>
   <!-- <form  method="post" action="index.php">
        <label>identificacion</label>
        <input type="number" name="Identificacion" required>
        <label>nombres</label>
        <input type="text" name="nombre" required>
        <label>apellidos</label>
        <input type="text" name="apellidos" required>
        <label>telefono</label>
        <input type="text" name="correo" required>
        <label>fechaNacimiento</label>
        <input type="number" name="celular" required>
        <label>direccion</label>
        <input type="varchar" name="direccion" required>
        <label>correo</label>
        <input type="varchar" name="correo" required>
        <input type="submit" name="btnGuardar" value="GUARDAR">
    </form>-->
    <br><br>
    <!--<table border="1">
        <thead>
            <th>Identificacion</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>fechaNacimiento</th>
            <th>direccion</th>
            <th>correo</th>


        </thead>-->
        <!--
        <tbody>
          //<?php 
               // global $conexion;
               // $sql2 = "SELECT * FROM usuario";                
               // $ejecutar2 = $conexion->query($sql2);                
              //  while ($row = mysqli_fetch_object($ejecutar2)){
                 //   echo '<tr>
                  //          <td>'.$row->identificacion.'</td>
                  //          <td>'.$row->nombre.'</td>
                  //          <td>'.$row->apellidos.'</td>
                  //          <td>'.$row->correo.'</td>
                 //           <td>'.$row->celular.'</td>
                 //           <td>'.$row->direccion.'</td>
                 //           <td>'.$row->correo.'</td>
                 //       </tr>';
               // }
           // ?>
        </tbody>-->
    <!--</table>
</body>
</html>