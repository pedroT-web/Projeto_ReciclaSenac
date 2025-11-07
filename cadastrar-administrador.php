<?php
require 'config.php';
require './class/Administrador.php';

$email = $_POST["input_email"];
$senha = $_POST["input_senha"];

$administrador = new Administrador();

$administrador->fnCadastrarAdmin($email, $senha);

header('location: ./login.php');

