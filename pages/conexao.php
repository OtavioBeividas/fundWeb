<?php

$host = "localhost";
$database = "login";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($host, $usuario, $senha, $database);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysql->connect_errno . ") " . $mysqli->connect_error;
}