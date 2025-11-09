<?php
require 'config.php';

$funcionario = $_POST['id_funcionario'];
$material = $_POST['tipo_material'];

$peso = str_replace(',', '.', $_POST['input_peso']); 
$data = $_POST['input_data'];


$inserirDados = "INSERT INTO cadastro_de_peso(peso, id_funcionarios, id_material, data) VALUES (:peso, :funcionario, :id_material ,:data_cadastro)";

$prepararInsert = $conn->prepare($inserirDados)->execute([
    ":peso" => $peso,
    ":funcionario" => $funcionario,
    ':id_material' => $material,
    ":data_cadastro" => $data
]);

header("Location: ./pesagem.php");
