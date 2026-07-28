<?php
$servidor = "***.*.*.*";//local onde encontrar a base de dados
$usuario = "root"; //usuario do banco de dados
$senha = "*********"; // senha do banco de dados
$banco = "cliente"; // nome do banco de dados

$conn = new mysqli($servidor, $usuario, $senha, $banco); // conectando com o banco de dados

if ($conn->connect_error) {// verificar se a conexão falhou ou não
    die("Falha na conexão: " . $conn->connect_error);
}

return $conn; // retorna a conexão para ser usada em outros arquivos
