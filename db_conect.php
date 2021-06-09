<?php

function db_connect(){
    $servername = "127.0.0.1";

    $username = "root";
    $password = "";
    $dbname = "booktoyou";

    $mysql_conn = mysqli_connect($servername, $username, $password, $dbname);
    return $mysql_conn;
}

?>
