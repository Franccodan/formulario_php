<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'dbphp7';

    $conexao = new mysqli($dbHost,  $dbUsername,  $dbPassword, $dbName);
/*
    if($conexao->connect_errno) {
        echo 'erro';
    } else {
        echo 'conexão feita';
    }
*/

?>