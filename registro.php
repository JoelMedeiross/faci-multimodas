<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql)) {
        header("Location: login.php");
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
?>

<link rel="stylesheet" href="style.css">

<h2>Registrar Funcionário</h2>

<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <button type="submit">Registrar</button>
</form>
