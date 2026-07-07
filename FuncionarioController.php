<?php

class FuncionarioController
{
    private Funcionario $funcionario;

    public function __construct(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    public function listar()
    {
        try {
            $funcionarios = $this->funcionario->listar();
        } catch (Exception $erro) {
            $funcionarios = [];

            echo "<p>Erro ao listar funcionários: {$erro->getMessage()}</p>";
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
        echo "<th>Ações</th>";
        echo "</tr>";

        foreach ($funcionarios as $item) {
            echo "<tr>";
            echo "<td>{$item->id}</td>";
            echo "<td>{$item->nome}</td>";
            echo "<td>{$item->sobrenome}</td>";
            echo "<td>{$item->cargo}</td>";
            echo "<td>{$item->setor}</td>";
            echo "<td>{$item->salario}</td>";
            echo "<td>{$item->cracha}</td>";

            echo "<td>";
            echo "<a href='/funcionarios/{$item->id}/editar'>Editar</a>";

            echo "
                <form method='POST' action='/funcionarios/{$item->id}/deletar' style='display:inline'>
                    <button type='submit'>Excluir</button>
                </form>
            ";

            echo "</td>";

            echo "</tr>";
        }

        echo "</table>";
    }

    public function novo()
    {
        $titulo = "Novo funcionário";
        $action = "/funcionarios";

        $funcionarioEdicao = null;

        require __DIR__ . "/form-funcionario.php";
    }

    public function criar()
    {
        $dados = $this->obterDadosFormulario();

        try {
            $this->funcionario->criar($dados);

            $this->redirecionarParaFuncionarios();
        } catch (Exception $erro) {
            echo "<p>Erro ao criar funcionário: {$erro->getMessage()}</p>";
        }
    }

    public function editar($id)
    {
        try {
            $funcionarioEdicao = $this->funcionario->listarPorId($id);
        } catch (Exception $erro) {
            echo "<p>Funcionário não encontrado.</p>";
            return;
        }

        $titulo = "Editar funcionário";
        $action = "/funcionarios/{$id}";

        require __DIR__ . "/form-funcionario.php";
    }

    public function atualizar($id)
    {
        $dados = $this->obterDadosFormulario();

        try {
            $this->funcionario->atualizar($id, $dados);

            $this->redirecionarParaFuncionarios();
        } catch (Exception $erro) {
            echo "<p>Erro ao atualizar funcionário: {$erro->getMessage()}</p>";
        }
    }

    public function deletar($id)
    {
        try {
            $this->funcionario->excluir($id);

            $this->redirecionarParaFuncionarios();
        } catch (Exception $erro) {
            echo "<p>Erro ao excluir funcionário: {$erro->getMessage()}</p>";
        }
    }

    private function obterDadosFormulario()
    {
        return (object) [
            "nome" => $_POST["nome"] ?? "",
            "sobrenome" => $_POST["sobrenome"] ?? "",
            "salario" => $_POST["salario"] ?? 0,
            "cargo" => $_POST["cargo"] ?? "",
            "setor" => $_POST["setor"] ?? "",
            "cracha" => $_POST["cracha"] ?? "",
            "idPessoa" => $_POST["idPessoa"] ?? 0,
        ];
    }

    private function redirecionarParaFuncionarios()
    {
        header("Location: /funcionarios");
        exit;
    }
}
