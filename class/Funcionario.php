<?php

class Funcionario{

    private $conn;
    public function __construct()
    {
         $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = "{$_ENV['USUARIO']}";
        $senha = "{$_ENV['SENHA']}";

        $this->conn = new PDO($dsn, $usuario, $senha);
    }

    public function fnCadastrarFuncionario($nomeFuncionario){

        $insert = "INSERT INTO tb_funcionarios (nome_do_funcionario) VALUE (:nome_funcionario)";
        $prepararInsert = $this->conn->prepare($insert);
        $prepararInsert->execute([
            ":nome_funcionario" => $nomeFuncionario
        ]);
        
        return "Usuário Inserido Com Sucesso";
    }

    public function fnSelecionarFuncionarios(){
        $select = "SELECT * FROM tb_funcionarios";
        $prepararSelect = $this->conn->query($select)->fetchAll();

        return $prepararSelect;
    }
}