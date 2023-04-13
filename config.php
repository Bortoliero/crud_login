<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id20421245_base_pi_exemp"; // usuário do MySQL
$pass = "Batatao1234@"; // senha do MySQL
$dbname = "id20421245_base_pi"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
