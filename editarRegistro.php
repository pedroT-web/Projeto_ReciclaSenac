<?php
require 'config.php';
require './class/Peso.php';

$peso = new Peso();

$idRegistro = $_POST["id_registro"];
$novoPeso = $_POST["input_peso"];
$novoId_funcionario = $_POST['id_funcionario'];
$novoId_material = $_POST['id_material'];
$novaData = $_POST['input_data'];

// echo $idRegistro."\n".$novoId_funcionario ."\n". $novoId_material."\n". $novoPeso."\n".$novaData;

$peso->fnAtualizarPeso($idRegistro, $novoPeso, $novoId_funcionario, $novoId_material, $novaData);

header("Location: ./historico.php");