<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";
defineCategoriaCompetidor($nome, $idade);
header('location:index.php');
