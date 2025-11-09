<?php
session_start();

require './config.php';
require './class/Administrador.php';

$email = isset($_POST['input_email']) ? trim($_POST['input_email']) : FALSE;
$senha = isset($_POST['input_senha']) ? trim($_POST['input_senha']) : FALSE;;

$admin = new Administrador();

if ($email == FALSE || $senha == FALSE || empty($email) || empty($senha)) {
    echo "<div id='invalido'>Valores Inválidos</div>";
} else {
    
    $autorizado = $admin->fnValidarAdmin($email, $senha);

    
    if (!isset($autorizado) || $autorizado == FALSE) {
        header("location: ./login.php?usuariologado=1");
        exit;
    } else {
        
        $_SESSION["usuario_logado"] = TRUE;
        
        header("location: ./historico.php");
        exit;
    }
}
