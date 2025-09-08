<?php
include './template/header.php';
include './template/modal-cadastrarFuncionario.php';
require './config.php';

// if(isset($_SESSION) || empty($_SESSION['id_logado'])){
//     header('location:./login.php');
// }

$dataAtual = date('Y-m-d');


if (isset($_POST['inicio_periodo']) && !empty($_POST['inicio_periodo'])) {
    $dataInicio = $_POST['inicio_periodo'];
    $dataFim = $_POST['fim_periodo'];
    var_dump($dataInicio);

    $select = "SELECT cad_peso.id, cad_peso.peso, cad_peso.data, tb_func.id_funcionario, tb_func.nome_do_funcionario, tb_mate.id_material, tb_mate.nome_material FROM cadastro_de_peso AS cad_peso INNER JOIN tb_funcionarios AS tb_func ON tb_func.id_funcionario = cad_peso.id_funcionarios INNER JOIN materiais AS tb_mate ON tb_mate.id_material = cad_peso.id_material WHERE data BETWEEN :data_inicio AND :data_fim";
    $preparaSelect = $conn->prepare($select);
    $preparaSelect->execute([
        ":data_inicio" => $dataInicio,
        ":data_fim" => $dataFim
    ]);
    $resultadoConsulta = $preparaSelect->fetchAll();

}else{
    $dataInicio = $dataAtual;
    $dataFim = $dataAtual;
    $select = "SELECT * FROM cadastro_de_peso WHERE data BETWEEN :data_inicio AND :data_fim";

    $preparaSelect = $conn->prepare($select);
    $preparaSelect->execute([
        ":data_inicio" => $dataInicio,
        ":data_fim" => $dataFim
    ]);
    $resultadoConsulta = $preparaSelect->fetchAll();
}

?>

<section class="pag_historico">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalCadastrarFuncionario">Cadastrar Funcionário</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalCadastrarMaterial" href="#">Cadastrar Material</a></li>
        </ul>
    </div>
    <div class="agrupamento_historico">
        <div class="local_historico">
            <div class="espacamento_historico">
                <form method="POST" action="#" class="btn-group botoes_acesso_historico" role="group">
                    <div>
                        <label class="label_periodo_inicio">De: </label><input type="date" id="inicio_periodo" name="inicio_periodo" class=" input_periodo" value="<?= $dataAtual ?>">
                    </div>
                    <div>
                        <label class="label_periodo_fim">Até: </label><input type="date" id="fim_periodo" name="fim_periodo" class=" input_periodo periodo_fim" value="<?= $dataAtual ?>">
                    </div>
                    <!-- Tentando armazenar o resultado da consulta para enviar para a página de gerar-excel.php -->
                    <input type="hidden" name="consultaPeriodo" value="<?= $resultadoConsulta ?>">
                    <div>
                        <button type="submit" class="botao_gerar_historico">Gerar Historico</button>
                    </div>
                </form>
                <br>
            </div class="btn-group botoes_acesso_historico" role="group">
            
            <div class="alert alert-warning w-100 text-center" role="alert">
                Selecione Um Período para ser exibido
            </div>

            <table class="ui celled ui celled table-striped table tabela_historicos">
                <thead>
                    <tr>
                        <th>Nome do Funcionário</th>
                        <th>Tipo Material</th>
                        <th>Peso</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultadoConsulta as $cadastro) { ?>
                        <tr class="itens_tabela">
                            <td><?= $cadastro['nome_do_funcionario'] ?></td>
                            <td><?= $cadastro['nome_material'] ?></td>
                            <td><?= $cadastro['peso'] ?></td>
                            <td><?= $cadastro['data'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="campo_botao_enviar">
            <div class="ui button botao_relatorio ms-4 col-sm-8 col-md-6 col-lg-6 col-6" tabindex="0">
                <a type="button" href="gerar-excel.php" class="btn btn-primary visible content botao_enviar_relatorio">Gerar Relatório</a>
            </div>
        </div>
    </div>
</section>

<?php
include './template/footer.php';

?>