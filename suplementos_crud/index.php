<?php
include 'db.php';

// Busca os suplementos
$result = $conn->query("SELECT * FROM suplementos");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Lista de Suplementos</title>
</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="text-center">Gestão de Suplementos</h1>
    <a href="adicionar.php" class="btn btn-success mb-3">Adicionar Suplemento</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nome']; ?></td>
                    <td><?= $row['descricao']; ?></td>
                    <td>R$ <?= number_format($row['preco'], 2, ',', '.'); ?></td>
                    <td><?= $row['estoque']; ?></td>
                    <td>
                        <a href="editar.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="excluir.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
