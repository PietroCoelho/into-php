<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categoria = [];
    $categoria[] = 'infantil';
    $categoria[] = 'adolescente';
    $categoria[] = 'adulto';
    removerMensagemErro();
    if (validaNome($nome) && validaIdade($idade)) {
        if ($idade >= 6 && $idade <= 12) {

            for ($i = 0; $i <= count($categoria); $i++) {

                if ($categoria[$i] == 'infantil') {
                    setarMensagemSucesso(" o nadador " . $nome . " está na categoria " . $categoria[$i]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {

            for ($i = 0; $i <= count($categoria); $i++) {

                if ($categoria[$i] == 'adolescente') {
                    setarMensagemSucesso(" o nadador " . $nome . " está na categoria " . $categoria[$i]);
                    return null;
                }
            }
        } else {

            for ($i = 0; $i <= count($categoria); $i++) {

                if ($categoria[$i] == 'adulto') {
                    setarMensagemSucesso(" o nadador " . $nome . " está na categoria " . $categoria[$i]);
                    return null;
                }
            }
        }

    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
