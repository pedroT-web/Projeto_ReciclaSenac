<?php
require 'config.php';
require './class/Peso.php';

$peso = new Peso();

$idRegistro = $_POST["id_registro"];
$novoPeso = $_POST["inputPeso"];
$novoId_funcionario = $_POST['id_funcionario'];
$novoId_material = $_POST['id_material'];
$novaData = $_POST['inputData'];

$pesoFormatado = str_replace(',', '.', $novoPeso);


$peso->fnAtualizarPeso($idRegistro, $pesoFormatado, $novoId_funcionario, $novoId_material, $novaData);

header("Location: ./historico.php");
