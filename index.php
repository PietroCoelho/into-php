<?php
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Formulário</title>
</head>

<body>
    <h1>Formulário de Inscrição</h1>
    <form action="script.php" method="POST">
        <?php
        $mensagemDeSucesso = obterMensagemSucesso();
        if (!empty($mensagemDeSucesso)) {
            echo $mensagemDeSucesso . '<br/>';
        }

        $mensagemDeErro = obterMensagemErro();
        if (!empty($mensagemDeErro)) {
            echo $mensagemDeErro . '<br/>';
        }
        ?>
        Nome:<br />
        <input type="text" name="nome" value="<?php echo $nome ?>" placeholder="Nome completo "> <br />
        idade:<br />
        <input type="text" name="idade" value="<?php echo $idade ?>" placeholder="idade "> <br />
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>