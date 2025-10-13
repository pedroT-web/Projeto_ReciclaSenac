<?php
require 'config.php';

//  Incompleto
$email = $_POST["input_email"];
$senha = $_POST["input_senha"];

$script = "INSERT INTO login_administrador(email, senha) VALUE (:email, :senha)";
$prepararScript = $conn->prepare($script);
$prepararScript->execute([
    ":email" => $email,
    ":senha" => $senha
]);


