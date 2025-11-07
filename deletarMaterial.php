<?php 
require "config.php";
require './class/Material.php';

$id = $_GET["idMaterial"];

$material = new Material();

$material->fnDesativarMaterial($id);

header("location: ./gerenciamentoCadastros.php");