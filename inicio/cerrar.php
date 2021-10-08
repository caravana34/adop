<?php
include('../config/conexion.php');
session_start();
session_unset();
session_destroy();
header("Location:.././index.php" )
?>