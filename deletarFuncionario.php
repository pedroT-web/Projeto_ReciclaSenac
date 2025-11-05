<?php
require "./config.php";

$idFuncionario = $_GET["idFuncionario"];

$delete = "DELETE FROM tb_funcionarios WHERE id_funcionario = :id";
$prepararDelete = $conn->prepare($delete);
$prepararDelete->execute([
    ":id" => $idFuncionario
]);

header("location: ./gerenciamentoCadastros.php");