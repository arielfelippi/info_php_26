<?php

$funcionarioFormulario = $funcionarioFormulario ?? new Funcionario();

function escapar($valor): string
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, "UTF-8");
}

?>

<h1><?= escapar($titulo) ?></h1>

<form method="POST" action="<?= escapar($action) ?>">
    <div>
        <label>Nome</label>
        <input
            type="text"
            name="nome"
            value="<?= escapar($funcionarioFormulario->getNome()) ?>"
        >
    </div>

    <div>
        <label>Sobrenome</label>
        <input
            type="text"
            name="sobrenome"
            value="<?= escapar($funcionarioFormulario->getSobrenome()) ?>"
        >
    </div>

    <div>
        <label>Salário</label>
        <input
            type="number"
            step="0.01"
            name="salario"
            value="<?= escapar($funcionarioFormulario->getSalario()) ?>"
        >
    </div>

    <div>
        <label>Cargo</label>
        <input
            type="text"
            name="cargo"
            value="<?= escapar($funcionarioFormulario->getCargo()) ?>"
        >
    </div>

    <div>
        <label>Setor</label>
        <input
            type="text"
            name="setor"
            value="<?= escapar($funcionarioFormulario->getSetor()) ?>"
        >
    </div>

    <div>
        <label>Crachá</label>
        <input
            type="text"
            name="cracha"
            value="<?= escapar($funcionarioFormulario->getCracha()) ?>"
        >
    </div>

    <div>
        <label>ID Pessoa</label>
        <input
            type="number"
            name="idPessoa"
            value="<?= escapar($funcionarioFormulario->getIdPessoa()) ?>"
        >
    </div>

    <br>

    <button type="submit">Salvar</button>

    <a href="/funcionarios">Voltar</a>
</form>
