<?php
// Inicia uma sessão
session_start();

require './config.php';
require './class/Administrador.php';

// Ternários
//    Condição                        Resultado se for true             resultado se for false
$email = isset($_POST['input_email']) ? trim($_POST['input_email']) : FALSE;
$senha = isset($_POST['input_senha']) ? trim($_POST['input_senha']) : FALSE;;

// Instanciando a classe de admin
$admin = new Admin();

// Segunda Validação se caso os valores não venham como o esperado 
if ($email == FALSE || $senha == FALSE || empty($email) || empty($senha)) {
    echo "<div id='invalido'>Valores Inválidos</div>";
} else {
    // Atribuando valores aos parametros da função de validar administrador esperando o retorno da mesma
    $autorizado = $admin->fnValidarAdmin($email, $senha);

    // Verificando o retorno da função, se for FALSE
    if (!isset($autorizado) || $autorizado == FALSE) {
        // Redireciona o usuário para a página de login com uma requisição get para a mensagem de erro
        header("location: ./login.php?usuariologado=1"); // requisição get para fazer exibir a mensagem que o usuário está incorreto
        // Saindo da sessão desse arquivo, para não ficar com duas sessões iniciadas
        exit;
    } else {
        // Atribuindo o valor para o usuario_logado, para que a sessão possa ser iniciada lá na página do histórico
        $_SESSION["usuario_logado"] = TRUE;
        // Redirecionando para a página de histórico, para iniciar a sessão
        header("location: ./historico.php");
        // Saindo da sessão desse arquivo, para não ficar com duas sessões iniciadas
        exit;
    }
}
