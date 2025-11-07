<?php
require 'config.php';

$email = $_POST["email_redefinicao"];
$senha = $_POST["inputSenhaAtual"];
$novaSenha = $_POST["nova_senha_redefinicao"];
$confirmarSenha = $_POST["conf_nova_senha_redefinicao"];


$select = "SELECT * FROM login_administrador WHERE email = :email AND senha = :senha";

$prepararSelect = $conn->prepare($select);
$prepararSelect->execute([
    ":email" => $email,
    ":senha" => $senha
]);

$resultadoSelect = $prepararSelect->fetch();

if($resultadoSelect['email'] == $email && $resultadoSelect["senha"] == $senha){
    $scriptUpdate = "UPDATE login_administrador SET senha = :novaSenha WHERE email = :email";

    $prepararUpdate = $conn->prepare($scriptUpdate);
    $prepararUpdate->execute([
        ":novaSenha" => $novaSenha,
        ":email" => $email
    ]);

    echo '<script>alert("Hello Word")</script>';
    header("Location: ./login.php");
}else{
    header("Location: ./login.php?mensagem_erro=1");
}
