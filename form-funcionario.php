<?php

$nome = $funcionarioEdicao?->getNome() ?? "";
$sobrenome = $funcionarioEdicao?->getSobrenome() ?? "";
$salario = $funcionarioEdicao?->getSalario() ?? "";
$cargo = $funcionarioEdicao?->getCargo() ?? "";
$setor = $funcionarioEdicao?->getSetor() ?? "";
$cracha = $funcionarioEdicao?->getCracha() ?? "";
$idPessoa = $funcionarioEdicao?->getIdPessoa() ?? "";

?>

<h1><?= $titulo ?></h1>

<form method="POST" action="<?= $action ?>">
    <div>
        <label>Nome</label>
        <input type="text" name="nome" value="<?= $nome ?>">
    </div>

    <div>
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" value="<?= $sobrenome ?>">
    </div>

    <div>
        <label>Salário</label>
        <input type="number" step="0.01" name="salario" value="<?= $salario ?>">
    </div>

    <div>
        <label>Cargo</label>
        <input type="text" name="cargo" value="<?= $cargo ?>">
    </div>

    <div>
        <label>Setor</label>
        <input type="text" name="setor" value="<?= $setor ?>">
    </div>

    <div>
        <label>Crachá</label>
        <input type="text" name="cracha" value="<?= $cracha ?>">
    </div>

    <div>
        <label>ID Pessoa</label>
        <input type="number" name="idPessoa" value="<?= $idPessoa ?>">
    </div>

    <br>

    <button type="submit">Salvar</button>

    <a href="/funcionarios">Voltar</a>
</form>
