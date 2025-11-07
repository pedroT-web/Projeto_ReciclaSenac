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
        $select = "SELECT * FROM materiais WHERE ativado = 'Ativo'";
        $prepararSelect = $this->conn->query($select)->fetchAll();

        return $prepararSelect;
    }

    public function fnAtualizarMaterial($id, $nomeMaterial, $status){
        $update = "UPDATE materiais SET nome_material = :material, ativado = :status WHERE id_material = :id";
        $prepararUpdate = $this->conn->prepare($update);
        $prepararUpdate->execute([
            ":id" => $id,
            ":material" => $nomeMaterial,
            ":status" => $status,
        ]);
    }

    public function fnDesativarMaterial($idMaterial){
        $desativar = "UPDATE materiais SET ativado = 'Desativo' WHERE id_material = :id";
        $prepararDesativar = $this->conn->prepare($desativar);
        $prepararDesativar->execute([
            ":id" => $idMaterial
        ]);
    }
}
