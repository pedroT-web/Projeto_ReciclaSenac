<?php
require './config.php';
require './class/Peso.php';


$inicioPeriodo = $_GET["inicioPeriodo"];
$fimPeriodo = $_GET["fimPeriodo"];

$peso = new Peso();
$peso->fnDeletarPeriodo($inicioPeriodo, $fimPeriodo);

header("Location: ./historico.php");
