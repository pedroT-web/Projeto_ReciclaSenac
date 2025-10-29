<?php

class Peso
{

    private $conn;
    public function __construct()
    {
        $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = "{$_ENV['USUARIO']}";
        $senha = "{$_ENV['SENHA']}";

        $this->conn = new PDO($dsn, $usuario, $senha);
    }

    public function fnSelecionarPorPeriodo($dataInicio, $dataFim)
    {
        $scriptConsultaGeral = "SELECT 
                                    tb_func.nome_do_funcionario, 
                                    tb_mate.nome_material ,
                                    cad_peso.peso,
                                    cad_peso.data
                                FROM 
                                    cadastro_de_peso AS cad_peso 
                                INNER JOIN 
                                    tb_funcionarios AS tb_func 
                                    ON tb_func.id_funcionario = cad_peso.id_funcionarios 
                                INNER JOIN 
                                    materiais AS tb_mate 
                                    ON tb_mate.id_material = cad_peso.id_material 
                                WHERE 
                                    data between :dataInicio AND :dataFim ORDER BY data";
        $prepararScript = $this->conn->prepare($scriptConsultaGeral);
        $prepararScript->execute([
            ":dataInicio" => $dataInicio,
            ":dataFim" => $dataFim
        ]);
        return $prepararScript->fetchAll();
    }

    public function fnDeletarRegistro($id_deletar)
    {
        $scriptDelete = "DELETE FROM cadastro_de_peso WHERE id = :id";
        $prepararDelete = $this->conn->prepare($scriptDelete);
        $prepararDelete->execute([
            ":id" => $id_deletar
        ]);
        return $prepararDelete;
    }

    public function fnConsultarRegistro($id_registro)
    {
        $scriptSelect = "SELECT FROM cadastro_de_peso WHERE id = :id";
        $prepararSelect = $this->conn->prepare($scriptSelect);
        $prepararSelect->execute([
            ":id" => $id_registro
        ]);

        return $prepararSelect->fetch();
    }

    public function fnSomarReciclavel($inicio, $fim)
    {
        $soma = "SELECT SUM(peso) FROM cadastro_de_peso WHERE id_material = 1 AND  data BETWEEN $inicio  AND $fim ";
        $prepararSoma = $this->conn->query($soma)->fetchAll();

        return $prepararSoma;
    }
}
