<?php

$servername = "sql112.infinityfree.com";
$username   = "if0_42710843";
$password   = "Proyecto2026";
$dbname     = "if0_42710843_proyecto_fundacion";
$port       = 3306;

$connection = new mysqli($servername, $username, $password, $dbname, $port);

if ($connection->connect_error) {
    die("Error de conexión: " . $connection->connect_error);
}

$connection->set_charset("utf8mb4");

?>
