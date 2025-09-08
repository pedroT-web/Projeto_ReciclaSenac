<?php

class Admin
{

    private $conn;
    function __construct()
    {
        $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = "{$_ENV['USUARIO']}";
        $senha = "{$_ENV['SENHA']}";

        $this->conn = new PDO($dsn, $usuario, $senha);
    }

    public function fnValidarAdmin($email, $senha){
        $consulta = "SELECT * FROM tb_funcionarios WHERE email = :email AND senha = :senha";

        $prepararConsulta = $this->conn->prepare($consulta);
        $prepararConsulta->execute([
            ":email" => $email,
            ":senha" => $senha
        ]);

        $prepararConsulta->fetch();

         if (!empty($prepararConsulta)) {
            session_start();

            $_SESSION['usuario_logado'] = TRUE;
            $_SESSION['emeail']     = $prepararConsulta['email'];
            return true;
        } else {
            return false;
        }
    }
}
