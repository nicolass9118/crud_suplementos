<?php
include 'db.php';

// Verifica se o ID foi fornecido
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

// Exclui o suplemento
$sql = "DELETE FROM suplementos WHERE id = $id";

if ($conn->query($sql)) {
    header("Location: index.php");
    exit;
} else {
    echo "Erro ao excluir: " . $conn->error;
}
?>
