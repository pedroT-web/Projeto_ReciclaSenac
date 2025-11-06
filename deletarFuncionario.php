<?php
require './class/Funcionario.php';
require "./config.php";

$funcionario = new Funcionario();

$idFuncionario = $_GET["idFuncionario"];

$funcionario->fnDesativarFuncionario($idFuncionario);

header("location: ./gerenciamentoCadastros.php");