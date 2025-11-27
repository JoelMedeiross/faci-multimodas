<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    // Upload imagem
    $imagem = $_FILES['imagem']['name'];
    $destino = "upload/" . basename($imagem);

    // Criar pasta se não existir
    if (!is_dir("upload")) {
        mkdir("upload", 0777, true);
    }

    // Mover arquivo
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {

        // Salvar no banco o caminho correto
        $sql = "INSERT INTO produtos (nome, preco, descricao, imagem) 
                VALUES ('$nome', '$preco', '$descricao', '$destino')";

        if ($conn->query($sql)) {
            echo "<p style='color:lime;font-weight:bold;'>✔ Produto adicionado com sucesso!</p>";
        } else {
            echo "<p style='color:red;'>❌ Erro ao salvar no banco: " . $conn->error . "</p>";
        }

    } else {
        echo "<p style='color:red;'>❌ Erro ao enviar imagem.</p>";
    }
}
?>
<link rel="stylesheet" href="style.css">

<h2>Adicionar Produto</h2>

<div class="ajeitar"><form method="POST" enctype="multipart/form-data">

    <input type="text" name="nome" placeholder="Nome do produto" required>

    <input type="number" step="0.01" name="preco" placeholder="Preço" required>

    <textarea name="descricao" placeholder="Descrição" required></textarea>

    <input type="file" name="imagem" required>

    <button type="submit">Salvar produto</button>
</form></div>

<div class="baixar"<p><a href="index.php">← Voltar ao catálogo</a></p>
<p>Logado como: <?= $_SESSION['user'] ?> | <a href="logout.php">Sair</a></p><div/>




