<?php

$hostname = "localhost";
$database = "mytable";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname,$database,$usuario,$senha);
if($mysqli->connect_errno){
    echo "Não foi possível efetuar a conexão";
}

// // if($mysqli->connect_errno){
// //     echo "Falha ao conectar:(" . $mysqli->connect_errno . "( " . $mysqli->connect_errno;
// }

?>