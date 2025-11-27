<?php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($senha, $user['senha'])) {
            $_SESSION['user'] = $user['nome'];
            header("Location: add.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="faci"><h1>Faci Multimodas</h1></div>
<div class="wyden"><img src="faci.png"></div>
<di class="titulo-login">

<d class="centro">
    <h1>Login</h1>
<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <button type="submit">Entrar</button>
</form></div>

<p>Não tem conta? <a href="registro.php">Registrar</a></p>
