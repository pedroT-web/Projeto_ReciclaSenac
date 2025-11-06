<?php
class Funcionario
{

    private $conn;
    public function __construct()
    {
        $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = "{$_ENV['USUARIO']}";
        $senha = "{$_ENV['SENHA']}";

        $this->conn = new PDO($dsn, $usuario, $senha);
    }

    public function fnCadastrarFuncionario($nomeFuncionario)
    {

        $insert = "INSERT INTO tb_funcionarios (nome_do_funcionario) VALUE (:nome_funcionario)";
        $prepararInsert = $this->conn->prepare($insert);
        $prepararInsert->execute([
            ":nome_funcionario" => $nomeFuncionario
        ]);

        return "Usuário Inserido Com Sucesso";
    }

    public function fnConsultarFuncionarios()
    {
        $select = "SELECT * FROM tb_funcionarios";
        $prepararSelect = $this->conn->query($select)->fetchAll();

        return $prepararSelect;
    }

    public function fnConsultarFuncionariosAtivos()
    {
        $select = "SELECT * FROM tb_funcionarios WHERE ativado = 'Ativo'";
        $prepararSelect = $this->conn->query($select)->fetchAll();

        return $prepararSelect;
    }

    public function fnDesativarFuncionario($idFuncionario)
    {
        $delete = "UPDATE tb_funcionarios SET ativado = 'Desativo' WHERE id_funcionario = :id";
        $prepararDelete = $this->conn->prepare($delete);
        $prepararDelete->execute([
            ":id" => $idFuncionario
        ]);
    }

    public function fnAtualizarFuncionario($id, $novoNome, $ativado)
    {
        $update = "UPDATE tb_funcionarios SET nome_do_funcionario = :nome, ativado = :status WHERE id_funcionario = :id";
        $prepararUpdate = $this->conn->prepare($update);
        $prepararUpdate->execute([
            ":id" => $id,
            ":nome" => $novoNome,
            ":status" => $ativado
        ]);
    }
}
