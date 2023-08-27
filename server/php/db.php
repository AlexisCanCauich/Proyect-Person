<?php

$db = new mysqli("localhost", "root", "", "agenda" );

if($db->connect_error){
    die("Error en la conexion" . $db->connect_error);
}

?>