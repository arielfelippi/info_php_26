<?php

class FuncionarioController
{
    private FuncionarioModel $funcionarioModel;

    public function __construct(FuncionarioModel $funcionarioModel)
    {
        $this->funcionarioModel = $funcionarioModel;
    }

    public function listar(): void
    {
        try {
            $registros = $this->funcionarioModel->listar();

            $funcionarios = array_map(function ($registro) {
                return Funcionario::criarPorDados($registro);
            }, $registros);
        } catch (Exception $erro) {
            $funcionarios = [];
        }

        echo "<h1>Funcionários</h1>";

        echo "<a href='/funcionarios/novo'>Novo funcionário</a>";

        echo "<br><br>";

        if (empty($funcionarios)) {
            echo "<p>Nenhum funcionário encontrado.</p>";
            return;
        }

        echo "<table border='1' cellpadding='8'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome</th>";
        echo "<th>Sobrenome</th>";
        echo "<th>Cargo</th>";
        echo "<th>Setor</th>";
        echo "<th>Salário</th>";
        echo "<th>Crachá</th>";
        echo "<th>ID Pessoa</th>";
        echo "<th>Ações</th>";
        echo "</tr>";

        foreach ($funcionarios as $funcionario) {
            echo "<tr>";
            echo "<td>{$funcionario->getId()}</td>";
            echo "<td>{$funcionario->getNome()}</td>";
            echo "<td>{$funcionario->getSobrenome()}</td>";
            echo "<td>{$funcionario->getCargo()}</td>";
            echo "<td>{$funcionario->getSetor()}</td>";
            echo "<td>{$funcionario->getSalario()}</td>";
            echo "<td>{$funcionario->getCracha()}</td>";
            echo "<td>{$funcionario->getIdPessoa()}</td>";

            echo "<td>";
            echo "<a href='/funcionarios/{$funcionario->getId()}/editar'>Editar</a>";

            echo "
                <form method='POST' action='/funcionarios/{$funcionario->getId()}/deletar' style='display:inline'>
                    <button type='submit'>Excluir</button>
                </form>
            ";

            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    public function novo(): void
    {
        $titulo = "Novo funcionário";
        $action = "/funcionarios";
        $funcionarioFormulario = new Funcionario();

        require __DIR__ . "/form-funcionario.php";
    }

    public function criar(): void
    {
        $funcionario = Funcionario::criarPorDados($this->obterDadosFormulario());

        try {
            $this->funcionarioModel->criar($funcionario->toArrayParaBanco());

            $this->redirecionarParaFuncionarios();
        } catch (Exception $erro) {
            echo "<p>Erro ao criar funcionário: {$erro->getMessage()}</p>";
        }
    }

    public function editar(int|string $id): void
    {
        try {
            $registros = $this->funcionarioModel->listarPorId((int) $id);

            if (empty($registros)) {
                echo "<p>Funcionário não encontrado.</p>";
                return;
            }

            $funcionarioFormulario = Funcionario::criarPorDados($registros[0]);
        } catch (Exception $erro) {
            echo "<p>Funcionário não encontrado.</p>";
            return;
        }

        $titulo = "Editar funcionário";
        $action = "/funcionarios/{$id}";

        require __DIR__ . "/form-funcionario.php";
    }

    public function atualizar(int|string $id): void
    {
        $funcionario = Funcionario::criarPorDados($this->obterDadosFormulario());

        try {
            $this->funcionarioModel->atualizar((int) $id, $funcionario->toArrayParaBanco());

            $this->redirecionarParaFuncionarios();
        } catch (Exception $erro) {
            echo "<p>Erro ao atualizar funcionário: {$erro->getMessage()}</p>";
        }
    }

    public function deletar(int|string $id): void
    {
        try {
            $this->funcionarioModel->excluir((int) $id);

            $this->redirecionarParaFuncionarios();
        } catch (Exception $erro) {
            echo "<p>Erro ao excluir funcionário: {$erro->getMessage()}</p>";
        }
    }

    private function obterDadosFormulario(): object
    {
        return (object) [
            "nome" => $_POST["nome"] ?? "",
            "sobrenome" => $_POST["sobrenome"] ?? "",
            "salario" => $_POST["salario"] ?? 0,
            "cargo" => $_POST["cargo"] ?? "",
            "setor" => $_POST["setor"] ?? "",
            "cracha" => $_POST["cracha"] ?? "",
            "idPessoa" => $_POST["idPessoa"] ?? null,
        ];
    }

    private function redirecionarParaFuncionarios(): void
    {
        header("Location: /funcionarios");
        exit;
    }
}
