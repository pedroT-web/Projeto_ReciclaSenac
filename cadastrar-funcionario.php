<?php
require 'config.php';
require './class/Funcionario.php';

$funcionario = new Funcionario();
$nomeFunc = ucwords($_POST['input_nome_func']);

$funcionario->fnCadastrarFuncionario($nomeFunc);

header("location: ./historico.php");
