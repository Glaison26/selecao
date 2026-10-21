<?php
// rotina para conexão com o banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'selecao';

$conection = new mysqli($host, $user, $password, $dbname);
if ($conection->connect_error) {
    die("Conexão falhou: " . $conection->connect_error);
}

?>