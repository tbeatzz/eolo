<?php
$servername = "localhost";
$database = "eolo";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$temperatura = $_GET['temperatura'];
$humedad = $_GET['humedad'];
$s_termica = $_GET['s_termica'];
$viento_direccion = $_GET['viento_direccion'];
$viento_velocidad = $_GET['viento_velocidad'];
$lluvia = $_GET['lluvia'];
$p_atmosferica = $_GET['p_atmosferica'];

$consulta = "INSERT INTO `datos`(`temperatura`, `humedad`, `s_termica`, `viento_direccion`, `viento_velocidad`, `lluvia`, `p_atmosferica`) VALUES ('$temperatura','$humedad','$s_termica','$viento_direccion','$viento_velocidad','$lluvia','$p_atmosferica')";
$resultado = mysqli_query($conn , $consulta);

?>