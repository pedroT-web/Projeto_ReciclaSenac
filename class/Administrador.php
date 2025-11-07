<?php

class Administrador
{

    private $conn;
    function __construct()
    {
        $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = "{$_ENV['USUARIO']}";
        $senha = "{$_ENV['SENHA']}";

        $this->conn = new PDO($dsn, $usuario, $senha);
    }

    public function fnValidarAdmin($email, $senha)
    {
        $consulta = "SELECT * FROM login_administrador WHERE email = :email  AND senha = :senha LIMIT 1";

        $prepararConsulta = $this->conn->prepare($consulta);
        $prepararConsulta->execute([
            ":email" => $email,
            ":senha" => $senha
        ]);

        $usuario = $prepararConsulta->fetch();

        if ($usuario) {
            $_SESSION['usuario_logado'] = TRUE;
            $_SESSION['logado'] = TRUE;
            return true;
        } else {
            return false;
        }
    }

    function fnCadastrarAdmin($email, $senha)
    {
        $script = "INSERT INTO login_administrador(email, senha) VALUE (:email, :senha)";
        $prepararScript = $this->conn->prepare($script);
        $prepararScript->execute([
            ":email" => $email,
            ":senha" => $senha
        ]);
    }
}
