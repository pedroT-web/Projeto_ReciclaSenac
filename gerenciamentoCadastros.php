<?php
include("./template/header.php");
require './config.php';
require './class/Funcionario.php';

$funcionario = new Funcionario();
$resultadoFuncionarios = $funcionario->fnConsultarFuncionarios();

$selectMateriais = "SELECT * FROM materiais";
$prepararMateriais = $conn->query($selectMateriais)->fetchAll()
?>


<section class="secaoCadastros">
    <section class="row">
        <div class="container col-5">
            <div class="tabela_funcionarios">
                <table class="ui celled table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Nome do Funcionário</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultadoFuncionarios as $funcionarios) { ?>
                            <tr class="itens_tabela_gerenciamento">
                                <td scope="row" data-label="Nome do Funcionário">
                                    <?= $funcionarios["nome_do_funcionario"] ?>
                                </td>
                                <td scope="row acoes_gerenciamento">
                                    <div class="text-center">
                                        <a class="botao_edicao" id="" type="button">
                                            <i class="icone_editar fs-4 bi bi-pencil-square"></i>
                                        </a>
                                        <a class="botao_deletar" id="botaoDeletarFuncionario" href="./deletarFuncionario.php?idFuncionario=<?= $funcionarios["id_funcionario"] ?>">
                                            <i class="icone_lixeira fs-4 ms-3 bi bi-trash3-fill"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container col-5">
            <div class="tabela_materiais">
                <table class="ui celled table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Nome do Material</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($prepararMateriais as $material) { ?>
                            <tr class="itens_tabela_gerenciamento">
                                <td scope="row" data-label="Nome do Funcionário">
                                    <?= $material["nome_material"] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</section>

<script src="./js/confirmacoes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>