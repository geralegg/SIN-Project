<?php 
include("db_conect.php");

$mysql_conn = db_connect();

$_POST["name"];
$_POST["email"];
$_POST["phone"];
$_POST["date"];
$_POST["time"];
$_POST["people"];
$_POST["message"];


$hora_actual = date("Y-m-d H:i:s");
$time = $_POST["time"];
$time2 = date("H:i:s", strtotime($time));

//Validacion del cliente
function get_id_cliente($nombre_cliente, $mysql_conn) 
{

    $consulta_cliente = "
    SELECT idclientes 
    FROM clientes
    where nombre = '".$nombre_cliente."'
    ";

    $resultado_cliente = mysqli_query($mysql_conn, $consulta_cliente);
    $id_cliente_validation = mysqli_fetch_array($resultado_cliente);
    return $id_cliente_validation;
}


//Agregar cliente o recuperar id
if(!empty(get_id_cliente($_POST["name"], $mysql_conn))) {

    $idcliente_registrado_array = get_id_cliente($_POST["name"], $mysql_conn);
    $idcliente_registrado = $idcliente_registrado_array[0];
} else {

    $consulta_cliente_insert = "
    INSERT INTO 
    clientes set
    nombre = '".$_POST["name"]."',
    email = '".$_POST["email"]."',
    celular = '".$_POST["phone"]."'
    ";
    mysqli_query($mysql_conn, $consulta_cliente_insert);

    $idcliente_registrado_array = get_id_cliente($_POST["name"], $mysql_conn);
    $idcliente_registrado = $idcliente_registrado_array[0];
}


//Mesas

function get_id_mesa($capacidad_mesas_get, $mysql_conn) 
{

    $consulta_mesa = "
    SELECT idmesas 
    FROM mesas
    where capacidad = '".$capacidad_mesas_get."'
    ";

    $resultado_mesa = mysqli_query($mysql_conn, $consulta_mesa);
    $id_mesa_validation = mysqli_fetch_array($resultado_mesa);
    return $id_mesa_validation[0];
}

$id_mesa_reservacion = get_id_mesa($_POST["people"], $mysql_conn);


//Reservas 

$consulta = "
    INSERT INTO 
    reservas set
    fecha = '".$_POST["date"]."',
    hora = '".$_POST["time"]."',
    numeropersonas = '".$_POST["people"]."',
    mensaje = '".$_POST["message"]."',
    fechaenvio = '".$hora_actual."',
    clientes_id = '".$idcliente_registrado."',
    mesas_id = '".$id_mesa_reservacion."'
    
    ";

$res =  mysqli_query($mysql_conn, $consulta);
 if($res) {
    header("Location: inner-page.php");
 } else {
    header("Location: index.php");
 }



?>