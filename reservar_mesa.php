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
$var_mesa_encontrada = FALSE;

$hora_actual = date("Y-m-d H:i:s");
$time = $_POST["time"];
$time2 = date("H:i:s", strtotime($time));

$array_mesas_capacidad = array();
$array_horarios_disponibles = array();
$i_mesa = 0;
//Validación cantidad de personas
$consulta_capacidad = "
SELECT idmesas, capacidad
FROM mesas
ORDER BY capacidad ASC
";

$resultado_mesa_capacidad = mysqli_query($mysql_conn, $consulta_capacidad);

while($columna_mesa = mysqli_fetch_array($resultado_mesa_capacidad))
{
    if($columna_mesa[1]>=$_POST["people"]){
        $array_mesas_capacidad[$i_mesa] = $columna_mesa[0];
        $i_mesa++;

    } else {
        continue;
    }


}
$var_mesa_encontrada = False;

for ( $var_mesa = 0; $var_mesa < count($array_mesas_capacidad); $var_mesa = $var_mesa + 1 ){
     
     $var_validadpr = 0;
     $var_recorrer_horarios = 0;
     $consulta_mesas_disponibles = "
     SELECT a.fecha, a.hora, b.idmesas, b.capacidad
     FROM reservas as a
     INNER JOIN mesas as b
     on a.mesas_id = b.idmesas
     WHERE fecha = '".$_POST["date"]."'
     AND b.idmesas= '".$array_mesas_capacidad[$var_mesa]."'
     ";
     $resultado_mesas_disponibles = mysqli_query($mysql_conn, $consulta_mesas_disponibles);
     $resultado_mesas_disponibles_array = mysqli_num_rows($resultado_mesas_disponibles);
    if(!empty($resultado_mesas_disponibles_array)){
         
        while ($columna = mysqli_fetch_array($resultado_mesas_disponibles))
        {
            $a_hora_incio =  $columna[1];
            $fechaAuxiliar	= strtotime ( "4 hours" , strtotime ( $a_hora_incio ) ) ;	
            $a_hora_final	= date ( 'H:i:s' , $fechaAuxiliar );
            $fechaAuxiliar2 = strtotime ( "- 4 hours" , strtotime ( $a_hora_incio ) ) ;
            $a_hora_limite_inferior = date ( 'H:i:s' , $fechaAuxiliar2 );
        
            if($time2 > $a_hora_limite_inferior && $time2 < $a_hora_final){

                //echo "te esperas:";
                //echo $columna[2];
                //echo '<br>';
                $array_horarios_disponibles[$var_recorrer_horarios] = $a_hora_final;
                $var_recorrer_horarios++;
                // header("Location: index.php?fecha_hora='".$fechaSalida ."'");
                //continue;
        
            } else {
                //echo "registrado correctamente:";
                //echo $columna[2];
                //echo '<br>';
                $var_validadpr++;
                //$var_mesa_encontrada = True;
                //$id_mesa_reservacion = $columna[2];
                //break;
            }
            if($resultado_mesas_disponibles_array == $var_validadpr){
                //echo "registrado correctamente:";
                $var_mesa_encontrada = True;
                $id_mesa_reservacion = $columna[2];
                //echo $columna[2];
                break;
            }
        
            
        }       
         
    } else {
         //echo "registrado correctamente2:";
         $var_mesa_encontrada = True;
         $id_mesa_reservacion = $array_mesas_capacidad[$var_mesa];
     }
     if($var_mesa_encontrada == TRUE){
        //header("Location: index.php?id_mesa=1");
        break;
        }

}
sort($array_horarios_disponibles);
if($var_mesa_encontrada == FALSE){
    header("Location: index.php?id_mesa='".$array_horarios_disponibles[0]."'");
    //echo $array_horarios_disponibles[0];
    exit("no hay mesas");
}
//Validación disponibilidad por horario


/*
$consulta_mesas_disponibles = "
SELECT a.fecha, a.hora, b.idmesas, b.capacidad
FROM reservas as a
INNER JOIN mesas as b
on a.mesas_id = b.idmesas
WHERE fecha = '".$_POST["date"]."'
ORDER BY a.hora ASC
";

$resultado_mesas_disponibles = mysqli_query($mysql_conn, $consulta_mesas_disponibles);

$array_mesas_disponibles = array();

while ($columna = mysqli_fetch_array($resultado_mesas_disponibles))
{
    $a_hora_incio =  $columna[1];
    $fechaAuxiliar	= strtotime ( "4 hours" , strtotime ( $a_hora_incio ) ) ;	
    $fechaSalida 	= date ( 'H:i:s' , $fechaAuxiliar );

    if($time2 >= $a_hora_incio && $time2 < $fechaSalida){

        header("Location: index.php?fecha_hora='".$fechaSalida ."'");
        continue;

    } else {
        echo "registrado correctamente";
        break;
    }
    

    
}
echo "fin";
*/



        












//

//Validación del cliente
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

/*
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
*/

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