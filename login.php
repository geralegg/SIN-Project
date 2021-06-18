<?php

include("db_conect.php");

$mysql_conn = db_connect();

$sql = "SELECT id FROM admin WHERE email = '".$_POST['email']."' 
and password = MD5('".$_POST['password']."')";

$res = mysqli_query($mysql_conn, $sql);

if (mysqli_num_rows($res) == 1) {
	
    session_start();
    $_SESSION["conectado"] = "1";
	$_SESSION["admin_nombre"] = $_POST['email'];

	mysqli_close($mysql_conn);
	header("Location: inner-page.php");

}else{
	header("Location: loginform.html");
}

//echo mysqli_error($mysql_conn);






?>