<?php
$conn = new mysqli("localhost", "root", "", "faci_multimodas");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
