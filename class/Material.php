<?php

class Material
{

    private $conn;
    public function __construct()
    {
        $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = "{$_ENV['USUARIO']}";
        $senha = "{$_ENV['SENHA']}";

        $this->conn = new PDO($dsn, $usuario, $senha);
    }

    public function fnCadastrarMaterial($materialNovo)
    {

        $insert = "INSERT INTO materiais(nome_material) VALUE (:material)";
        $prepararInsert = $this->conn->prepare($insert);
        $prepararInsert->execute([
            ":material" => $materialNovo
        ]);
    }

    public function fnSelecionarMateriais(){
        $select = "SELECT * FROM materiais";
        $prepararSelect = $this->conn->query($select)->fetchAll();

        return $prepararSelect;
    }
}
