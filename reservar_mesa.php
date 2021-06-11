<?php 
include("db_conect.php");

$mysql_conn = db_connect();









$hora_actual = date("Y-m-d H:i:s");
$time = $_POST["time"];
$time2 = date("H:i:s", strtotime($time));
$consulta = "
    INSERT INTO 
    reservas set
    fecha = '".$_POST["date"]."',
    hora = '".$_POST["time"]."',
    numeropersonas = '".$_POST["people"]."',
    mensaje = '".$_POST["message"]."',
    fechaenvio = '".$hora_actual."',
    clientes_id = '".$_POST["name"]."',
    mesas_id = '3'
    
    ";

mysqli_query($mysql_conn, $consulta);


echo $consulta;

$_POST["name"];
$_POST["email"];
$_POST["phone"];
$_POST["date"];
$_POST["time"];
$_POST["people"];
$_POST["message"];

header('Location: http://localhost/SIN-Project/index.html')
?>