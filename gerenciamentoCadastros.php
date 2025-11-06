<?php
session_start();
if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== TRUE) {
    // Redireciona para a página de login, enquanto o usuário não estiver logado na sessão
    header('location:./login.php');
    // Sair da sessão
    exit;
}


include("./template/header.php");
require('./template/modal-editarFuncionario.php');
require('./template/modal-editarMaterial.php');
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
                <h2 class="text-center mb-4 titulo_teblas">Funcionários</h2>
                <table class="ui celled table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Nome do Funcionário</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultadoFuncionarios as $funcionarios) { ?>
                            <tr class="itens_tabela_gerenciamento">
                                <td scope="row" data-label="Nome do Funcionário">
                                    <?= $funcionarios["nome_do_funcionario"] ?>
                                </td>
                                <td scope="row" data-label="Nome do Funcionário">
                                    <?= $funcionarios["ativado"] ?>
                                </td>
                                <td scope="row acoes_gerenciamento">
                                    <div class="text-center">
                                        <a class="botao_edicao" data-bs-toggle="modal" data-bs-target="#modalEditarFuncionario" id="botaoEditarFuncionario" data-bs-nomeFuncionario="<?= $funcionarios["nome_do_funcionario"] ?>" data-bs-idFuncionario="<?= $funcionarios["id_funcionario"] ?>" data-bs-status="<?= $funcionarios["ativado"] ?>" type="button">
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
                <h2 class="text-center mb-4 titulo_teblas">Materiais</h2>
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
                                <td scope="row acoes_gerenciamento">
                                    <div class="text-center">
                                        <a class="botao_edicao" data-bs-toggle="modal" data-bs-target="#modalEditarMaterial" id="botaoEditarMaterial" type="button">
                                            <i class="icone_editar fs-4 bi bi-pencil-square"></i>
                                        </a>
                                        <a class="botao_deletar"  id="botaoDeletarMaterial" href="./deletarFuncionario.php?idFuncionario=<?= $funcionarios["id_funcionario"] ?>">
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
    </section>
</section>

<script>
    const modalEdicaoFuncionario = document.getElementById("modalEditarFuncionario")

    if (modalEdicaoFuncionario) {
        modalEdicaoFuncionario.addEventListener("show.bs.modal", event => {
            const botao = event.relatedTarget

            const pegarNomeFuncionario = botao.getAttribute("data-bs-nomeFuncionario")
            const campoIdFuncionario = modalEdicaoFuncionario.querySelector('.campoFuncionario')
            campoIdFuncionario.value = pegarNomeFuncionario

            const pegar_id_funcionario = botao.getAttribute('data-bs-idFuncionario');
            const campo_id_funcionario = modalEdicaoFuncionario.querySelector('.campoIdFuncionario')
            campo_id_funcionario.value = pegar_id_funcionario

            const pegarStatus = botao.getAttribute('data-bs-status');
            const campo_status = modalEdicaoFuncionario.querySelector('.selectStatusFuncionario');
            campo_status.value = pegarStatus
        })
    }
</script>

<script src="./js/confirmacoes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>