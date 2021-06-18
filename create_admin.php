<?php

include("db_conect.php");

$mysql_conn = db_connect();

$sql = "INSERT INTO admin SET name = '".$_POST['name']."' , email = '".$_POST['email']."' , password = MD5('".$_POST['password']."')";

$res = mysqli_query($mysql_conn, $sql);
//echo mysqli_error($mysql_conn);
mysqli_close($mysql_conn);

header("Location: inner-page.php");


?>