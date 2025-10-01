<?php
require 'config.php';
include './class/Peso.php';

$id_registro = $_GET['id_registro'];

$peso = new Peso();

$peso->fnDeletarRegistro($id_registro);

header('location: ./historico.php');
