<?php
require 'config.php';
require './class/Material.php';

$idMaterial = $_POST['idMaterial'];
$novoNome = $_POST['inputNovoNomeMaterial'];
$ativado = $_POST["selectStatusMaterial"];

$material = new Material();

$material->fnAtualizarMaterial($idMaterial ,$novoNome, $ativado);

header('location: ./gerenciamentoCadastros.php');