<?php

include("func/db_connect.php");

$mysql_conn = connect_db();

$sql = "SELECT id FROM admin WHERE name = '".$_POST['u']."' 
and password = MD5('".$_POST['p']."')";

$res = mysqli_query($mysql_conn, $sql);

if (mysqli_num_rows($res) == 1) {
	
    session_start();
    $_SESSION["conectado"] = "1";
	$_SESSION["admin_nombre"] = $_POST['u'];

	mysqli_close($mysql_conn);
	header("Location: ***.php");

}else{
	header("Location: login.html");
}

//echo mysqli_error($mysql_conn);






?>