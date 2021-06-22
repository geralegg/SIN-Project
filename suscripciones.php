<?php
include("db_conect.php");

$mysql_conn = db_connect();

$_POST['email'];
 $consulta_suscrip = "
 INSERT INTO suscripciones
 (correo, estado)
 VALUES ( '".$_POST['email']."', 1)

 ";

$resultado_suscrip_query = mysqli_query($mysql_conn, $consulta_suscrip);


 if($resultado_suscrip_query) {
    header("Location: index.php?val=4");
 } else {
    header("Location: index.php?val=5");
 }

?>