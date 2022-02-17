<?php
session_start();
//Destruyo sesiones
session_destroy();
header("Location:index.php");
?>