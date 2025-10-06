<?php
session_start(); // Inicia a sessão
// Verifica se o usuario não foi logado na sessão
if(!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== TRUE){
    // Redireciona para a página de login, enquanto o usuário não estiver logado na sessão
    header('location:./login.php');
    // Sair da sessão
    exit;
}


include './template/header-historico.php';
include './template/modal-cadastrarFuncionario.php';
include './template/modal-editarRegistro.php';
require './config.php';

// Define o fuso-horário
date_default_timezone_set('America/Sao_Paulo');
// Concede a data de hoje
$dataAtual = date('Y-m-d');
                                // Verifica se existe um valor se não ele atribui um valor "DEFAULT", no caso 0 -- mesma funcionalidade do isset
$dataInicio = $_POST['inicio_periodo'] ?? 0;
$dataFim = $_POST['fim_periodo'] ?? 0;

$select = "SELECT cad_peso.id, cad_peso.peso, cad_peso.data, tb_func.id_funcionario, tb_func.nome_do_funcionario, tb_mate.id_material, tb_mate.nome_material FROM cadastro_de_peso AS cad_peso INNER JOIN tb_funcionarios AS tb_func ON tb_func.id_funcionario = cad_peso.id_funcionarios INNER JOIN materiais AS tb_mate ON tb_mate.id_material = cad_peso.id_material WHERE data BETWEEN :data_inicio AND :data_fim";
$preparaSelect = $conn->prepare($select);
$preparaSelect->execute([
    ":data_inicio" => $dataInicio,
    ":data_fim" => $dataFim
]);
$resultadoConsulta = $preparaSelect->fetchAll(); // Exibir o resultado da query em formato de arrey nomeado

?>

<section class="pag_historico">
    <div class="dropdown">


    </div>
    <div class="agrupamento_historico">
        <div class="local_historico">
            <div class="espacamento_historico">
                <form method="POST" action="#" class="btn-group botoes_acesso_historico" role="group">
                    <div class="container_label_inicio">
                        <label class="label_periodo_inicio me-2">De: </label><input type="date" id="inicio_periodo" name="inicio_periodo" class=" input_periodo" value="<?= $dataAtual ?>">
                    </div>
                    <div class="container_label_fim">
                        <label class="label_periodo_fim me-2">Até: </label><input type="date" id="fim_periodo" name="fim_periodo" class=" input_periodo periodo_fim" value="<?= $dataAtual ?>">
                    </div>
                    <!-- Tentando armazenar o resultado da consulta para enviar para a página de gerar-excel.php -->
                    <!-- <input type="hidden" name="consultaPeriodo" value="<?= $resultadoConsulta ?>"> -->
                    <div>
                        <button type="submit" class="botao_gerar_historico">Gerar Historico</button>
                    </div>
                </form>
                <br>
            </div class="btn-group botoes_acesso_historico" role="group">

            <table class="ui celled ui celled table-striped table tabela_historicos">
                <thead class="tabela_historicos">
                    <tr class="text-center">
                        <th>Nome do Funcionário</th>
                        <th>Tipo Material</th>
                        <th>Peso</th>
                        <th>Data</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody class="conteudo_historicos">
                    <?php
                    if (empty($resultadoConsulta)) {
                        echo '<div class="alert alert-warning w-100 text-center" role="alert">
                              Selecione um período para o histórico
                            </div>';
                    } else { ?>
                        <?php foreach ($resultadoConsulta as $cadastro) { ?>
                            <?php $data_formatada = DateTime::CreateFromFormat('Y-m-d', $cadastro['data'])->format('d/m/Y') ?>

                            <input type="hidden" value="<?= $cadastro['id'] ?>">
                            <tr class="itens_tabela">
                                <td class="text-center"><?= $cadastro['nome_do_funcionario'] ?></td>
                                <td class="text-center"><?= $cadastro['nome_material'] ?></td>
                                <td class="text-center"><?= $cadastro['peso'] ?></td>
                                <td class="text-center"><?= $data_formatada ?></td>
                                <td class="acoes text-center"><a class="botao_deletar" href="./deletarRegistro.php?id_registro=<?= $cadastro['id'] ?>&&dataInicio=<?= $dataInicio ?>&&dataFim=<?= $dataFim ?>&&deletar="><i class="icone_lixeira bi bi-trash3-fill"></i></a></td>
                            </tr>
                    <?php }
                    } ?>

                </tbody>
            </table>
        </div>

        <div class="campo_botao_enviar">
            <div class="ui button botao_relatorio ms-4 col-sm-8 col-md-6 col-lg-6 col-6" tabindex="0">
                <a type="button" href="gerar-excel.php?inicioPeriodo=<?= $dataInicio ?>&&fimPeriodo=<?= $dataFim ?>" class="btn btn-primary visible content botao_enviar_relatorio">Gerar Relatório</a>
            </div>
        </div>
    </div>
</section>

<?php
include './template/footer.php';

?>