<?php
require './class/Funcionario.php';
require './config.php';

$novoNomeFuncionario = ucwords($_POST["input_novo_nome_func"]);
$idFuncionario = $_POST["idFuncionario"];
$status = $_POST["selectStatus"];

$funcionario = new Funcionario();

$funcionario->fnAtualizarFuncionario($idFuncionario, $novoNomeFuncionario, $status);

header('location: ./gerenciamentoCadastros.php');