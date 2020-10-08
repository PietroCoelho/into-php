<?php
session_start();

$categoria = [];
$categoria[] = "infantil";
$categoria[] = "adolescente";
$categoria[] = "adulto";
$categoria[] = "idoso";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//implementando tecnicas de validação de dados
if (empty($nome)) {
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio';
    header('location:index.php');
    return;
} else if (strlen($nome) < 3) {
    $_SESSION['mensagem de erro'] = 'o nome deve ter no minimo três caracteres';
    header('location:index.php');
    return;
} else if (strlen($nome) > 40) {
    $_SESSION['mensagem de erro'] = 'nome deve ter no máximo 40 caracteres';
    header('location:index.php');
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['mensagem de erro'] = 'insira um dado válido para idade';
    header('location:index.php');
    return;
}

if ($idade >= 6 && $idade <= 12) {

    for ($i = 0; $i <= count($categoria); $i++) {

        if ($categoria[$i] == "infantil") {
            $_SESSION['mensagem de sucesso'] = ' o nadador ' . $nome . ' está na categoria ' . $categoria[$i];
            header('location:index.php');
            return;
        }
    }
} else if ($idade >= 13 && $idade <= 18) {

    for ($i = 0; $i <= count($categoria); $i++) {

        if ($categoria[$i] == "adolescente") {
            $_SESSION['mensagem de sucesso'] = ' o nadador ' . $nome . ' está na categoria ' . $categoria[$i];
            header('location:index.php');
            return;
        }
    }
} else {

    for ($i = 0; $i <= count($categoria); $i++) {

        if ($categoria[$i] == "adulto") {
            $_SESSION['mensagem de sucesso'] = ' o nadador ' . $nome . ' está na categoria ' . $categoria[$i];
            header('location:index.php');
            return;
        }
    }
}
