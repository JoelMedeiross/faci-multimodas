<?php
session_start();
include 'database.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM produtos WHERE id=$id");
$produto = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    if (!empty($_FILES['imagem']['name'])) {
        $imagem = "upload/" . basename($_FILES['imagem']['name']);
        move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
        $updateImg = ", imagem='$imagem'";
    } else {
        $updateImg = "";
    }

    $conn->query("UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao' $updateImg WHERE id=$id");
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="style.css">
<h2>Editar Produto</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nome" value="<?= $produto['nome'] ?>" required><br>
    <input type="text" name="preco" value="<?= $produto['preco'] ?>" required><br>
    <textarea name="descricao" required><?= $produto['descricao'] ?></textarea><br>
    <input type="file" name="imagem"><br>
    <button type="submit">Salvar</button>
</form>
