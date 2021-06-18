<?php

include("func/db_connect.php");

$mysql_conn = connect_db();

$sql = "INSERT INTO admin SET name = '".$_POST['u']."' , password = MD5('".$_POST['p']."'), id = 1";

$res = mysqli_query($mysql_conn, $sql);
//echo mysqli_error($mysql_conn);
mysqli_close($mysql_conn);

header("Location: lista_alfa.php");


?>