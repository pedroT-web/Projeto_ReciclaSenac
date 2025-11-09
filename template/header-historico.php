<!DOCTYPE html>
<html lang="pt-br">
<?php
include './template/modal-cadastrarFuncionario.php';
include './template/modal-cadastrarMaterial.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recicla Senac</title>


    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row">
        <header class="cabecalho col-sm-12 col-md-12 col-lg-12 col-12">
            <nav class="itens_header">
                <div class="col-4">
                    <button class="btn dropdown-toggle col-4 ms-2 botao_cadastro" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastros
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item modais_cadastro" data-bs-toggle="modal" data-bs-target="#modalCadastrarFuncionario">Cadastrar Funcionário</a></li>
                        <li><a class="dropdown-item modais_cadastro" data-bs-toggle="modal" data-bs-target="#modalCadastrarMaterial">Cadastrar Material</a></li>
                        <li><a class="dropdown-item modais_cadastro" href="./gerenciamentoCadastros.php">Gerenciar Cadastros</a></li>
                    </ul>
                </div>
                <ul class="paginas_header col-4">
                    <li><a href="./index.php" class="botoes_header">Inicio</a></li>
                    <li><a href="./pesagem.php" class="botoes_header">Pesagem</a></li>
                    <li><a href="./historico.php" class="botoes_header">Histórico</a></li>
                </ul>
                <div class="col-4 d-flex justify-content-end">
                    <a class="icone_login" href="./sair.php"><i class="icone_de_login bi bi-box-arrow-left"></i></a>
                </div>
            </nav>
        </header>
    </div>