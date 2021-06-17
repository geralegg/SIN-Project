<?php
    require('db_conect.php');
    $con = db_connect();
   
$_GET["id"];

echo $consulta = "DELETE FROM reservas WHERE idreservas ='".$_GET["id"]."' ";

$res =  mysqli_query($con, $consulta);

if($res) {
    header("Location: inner-page.php");
}


  ?>