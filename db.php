<?php
//Configuración
function conn(){
$hostame = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "proyecto";
    // Conexion
    $conectar = mysqli_connect($hostame, $usuariodb, $passworddb, $dbname);
    return $conectar;

}
?>