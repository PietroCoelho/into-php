<?php
$categoria = [];
$categoria[] = "infantil";
$categoria[] = "adolescente";
$categoria[] = "adulto";
$categoria[] = "idoso";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//implementando tecnicas de validação de dados
if (empty($nome)) {
    echo "campo de preenchimento obrigatório";
    return;
}

if (strlen($nome) < 3) {
    echo "nome invlálido";
    return;
}

if (strlen($nome) > 40) {
    echo "ultrapassou o máximo de caracteres";
    return;
}
if (!is_numeric($idade)) {
    echo "informe um número para idade";
    return;
}

if ($idade >= 6 && $idade <= 12) {

    for ($i = 0; $i <= count($categoria); $i++) {

        if ($categoria[$i] == "infantil")
            echo "o nadador " . $nome . " está na categoria " . $categoria[$i];
    }
} else if ($idade >= 13 && $idade <= 18) {

    for ($i = 0; $i <= count($categoria); $i++) {

        if ($categoria[$i] == "adolescente")
            echo "o nadador " . $nome . " está na categoria " . $categoria[$i];
    }
} else {

    for ($i = 0; $i <= count($categoria); $i++) {

        if ($categoria[$i] == "adulto")
            echo "o nadador " . $nome . " está na categoria " . $categoria[$i];
    }
}
