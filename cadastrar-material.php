<?php
include 'config.php';
require './class/Material.php';

$nomeMaterial = ucwords($_POST['input_cad_material']);

$material = new Material();


$material->fnCadastrarMaterial($nomeMaterial);

header('location: ./historico.php');