<?php


  include("func/db_connect.php");

  $mysql_conn = db_connect();

  $consulta = "UPDATE citas set nombre = '".$_POST["nombre"]."', ";
  $consulta .= "email = '".$_POST["email"]."', ";
  $consulta .= "celular = '".$_POST["celular"]."', ";
  $consulta .= "doctor_id = '".$_POST["doctorcito"]."', ";
  $consulta .= "especialidad_id = '".$_POST["especi"]."' ";
  $consulta .= "WHERE id = ".$_POST["id_cita"];

  $res = mysqli_query($mysql_conn, $consulta);

  //echo $consulta;

	header("Location: lista-citas.php");




?>