<?php
include 'config.php';
require './class/Material.php';

$nomeMaterial = $_POST['input_cad_material'];
echo ($nomeMaterial);

$material = new Material();


$material->fnCadastrarMaterial($nomeMaterial);

header('location: ./historico.php');