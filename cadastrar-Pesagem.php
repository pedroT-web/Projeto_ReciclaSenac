<?php

require 'config.php';

$funcionario = $_POST['id_funcionario'];
$material = $_POST['tipo_material'];
$peso = $_POST['input_peso'];
$tipo_peso = intval($_POST['tipo_peso']);
$data = $_POST['input_data'];
$kilos_peso = 0;
if (isset($tipo_peso) && !empty($tipo_peso)) {
    if ($tipo_peso == "G") {
        $kilos_peso = $peso / 1000;
    }
}

$inserirDados = "INSERT INTO cadastro_de_peso(peso, tipo_do_material, id_funcionarios, data) VALUES (:peso, :tipo_material, :funcionario, :data_cadastro)";

$prepararInsert = $conn->prepare($inserirDados)->execute([
    ":peso" => $kilos_peso,
    ":tipo_material" => $material,
    ":funcionario" => $funcionario,
    ":data_cadastro" => $data
]);

header("location: ./pesagem.php");
