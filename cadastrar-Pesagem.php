<?php

require 'config.php';

$funcionario = $_POST['id_funcionario'];
$material = $_POST['tipo_material'];
// str_replace($procura, $subistitui, nisso)
$peso = str_replace(',', '.', $_POST['input_peso']); // ele vai subistituir o valor desejado, pelo valor informado
$tipo_peso = $_POST['tipo_peso'];
$data = $_POST['input_data'];
$kilos_peso = 0;


if (isset($tipo_peso) && !empty($tipo_peso)) {
    if ($tipo_peso == "G") {
        $kilos_peso = $peso;
    }else if($tipo_peso == "KG"){
        $peso = floatval($peso); // Transforma em double
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
