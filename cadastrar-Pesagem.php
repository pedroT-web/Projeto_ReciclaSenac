<?php

require 'config.php';

$funcionario = $_POST['id_funcionario'];
$material = $_POST['tipo_material'];
$peso = intval($_POST['input_peso']);
$tipo_peso = $_POST['tipo_peso'];
$data = $_POST['input_data'];
$kilos_peso = 0;

var_dump($_POST);
var_dump($peso);
if (isset($tipo_peso) && !empty($tipo_peso)) {
    if ($tipo_peso == "G") {
        $kilos_peso = $peso / 1000;
    }else{
        $kilos_peso = $peso;
    }
}

$inserirDados = "INSERT INTO cadastro_de_peso(peso, id_funcionarios, id_material, data) VALUES (:peso, :funcionario, :id_material ,:data_cadastro)";

$prepararInsert = $conn->prepare($inserirDados)->execute([
    ":peso" => $kilos_peso,
    ":funcionario" => $funcionario,
    ':id_material' => $material,
    ":data_cadastro" => $data
]);

header("location: ./pesagem.php");
