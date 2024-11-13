<?php
$servername = "localhost";  // Geralmente "localhost"
$username = "root";         // Usuário do banco de dados
$password = "";             // Senha do banco de dados
$dbname = "usuariosDB";     // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
