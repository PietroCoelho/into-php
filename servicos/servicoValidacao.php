<?php
function validaNome(string $nome): bool
{
    //implementando tecnicas de validação de dados
    if (empty($nome)) {
        setarMensagemErro("O nome não pode ser vazio");
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro("o nome deve ter no minimo três caracteres");
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro( "nome deve ter no máximo 40 caracteres");
        return false;

    }
    return true;
}
function validaIdade(string $idade): bool
{
    if (!is_numeric($idade)) {
        setarMensagemErro("insira um dado válido para idade");
        return false;
    }
    return true;
}
