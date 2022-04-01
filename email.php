<?php
//Recibiendo datos
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

echo "Los datos son <br>";
echo "$nombre,$apellido,$email,$telefono,$mensaje"
$conectar=conn():
$sql="INSERT INTO usuarios (nombre, apellido, email, telefono, mensaje)
VALUES ('$nombre', '$apellido', '$email', '$telefono', '$mensaje')";
$resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysql_error($conectar), E_USER_ERROR);
echo = "$sql";
?>