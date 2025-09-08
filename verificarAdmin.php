<?php

require './config.php';
require './class/Administrador.php';

$admin = new Admin();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['input_email'];
    $senha = $_POST['input_senha'];

    $autorizado = $usuario->fnValidarAdmin($email, $senha);
}