<?php
session_start();
include 'database.php';
$result = $conn->query("SELECT * FROM produtos");
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h1>Catálogo de Produtos</h1>

    <?php if(isset($_SESSION['user'])): ?>
        <p>Bem-vindo, <?= $_SESSION['user'] ?> | <a href="logout.php">Sair</a></p>
        <a href="add.php"><button>Adicionar Produto</button></a>
    <?php else: ?>
        <a href="login.php"><button>Área administrativa</button></a>
    <?php endif; ?>

    <?php while($row = $result->fetch_assoc()): ?>
        <div class="produto">
            <img src="<?= $row['imagem'] ?>">
            <div>
                <h2><?= $row['nome'] ?></h2>
                <p><?= $row['descricao'] ?></p>
                <strong>R$ <?= $row['preco'] ?></strong><br><br>

                <?php if(isset($_SESSION['user'])): ?>
                    <a href="edit.php?id=<?= $row['id'] ?>"><button>Editar</button></a>
                    <a href="delete.php?id=<?= $row['id'] ?>"><button>Excluir</button></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>

