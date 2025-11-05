<?php
include './template/header.php';
require './class/Funcionario.php';
require 'config.php';

date_default_timezone_set('America/Sao_Paulo'); // Define p fuso-horário
$dataDiaria = date('Y-m-d'); // Coleta a data atual


// Consulta da tabela de cadastro de peso com uma filtragem diária
$scriptConsultaGeral = "SELECT cad_peso.id, cad_peso.peso,cad_peso.data, tb_func.nome_do_funcionario, tb_func.id_funcionario, tb_mate.id_material, tb_mate.nome_material FROM cadastro_de_peso AS cad_peso INNER JOIN tb_funcionarios AS tb_func ON tb_func.id_funcionario = cad_peso.id_funcionarios INNER JOIN materiais AS tb_mate ON tb_mate.id_material = cad_peso.id_material WHERE data = :data";
$dadosPreparado = $conn->prepare($scriptConsultaGeral);
$dadosPreparado->execute([
    ":data" => $dataDiaria
]);
$resultadoConsultaDiaria = $dadosPreparado->fetchAll();

// Consulta da tabela de funcionarios para gerar a lista do input de funcionario com dados direto do banco 

$funcionario = new Funcionario();
$resultadoConsulta = $funcionario->fnConsultarFuncionarios();

// Consulta da tabela de materiais para gerar a lista do input de material com os dados do banco
$scriptConsultaMaterial = "SELECT * FROM materiais";
$resultadoConsultaMaterial = $conn->query($scriptConsultaMaterial)->fetchAll();

?>

<!-- Página de Pesagem -->
<main class="pagina_de_pesagem" id="pagina_de_pesagem">
    <div class="row">
        <section class="espacamento_input col-sm-10 col-md-6 col-lg-6 col-10">
            <form method="POST" action="cadastrar-Pesagem.php" class="ms-4" onsubmit="return fnValidarEnvioMaterial(event)">
                <div class="campo_funcionario mb-5">
                    <label for="nome_funcionario">Nome Do Funcionário</label>
                    <br>
                    <select class="campos_pag_peso ui search dropdow listas" id="select_funcionario" name="id_funcionario" onblur="fnValidarFuncionario()" required>
                        <option value="" disabled selected required>Selecione o Funcionário</option>
                        <?php foreach ($resultadoConsulta as $linhas) { ?>
                            <option value="<?= $linhas['id_funcionario'] ?>"><?= $linhas['nome_do_funcionario'] ?></option>
                        <?php } ?>
                    </select>
                    <span id="erroFuncionario"></span>
                </div>
                <div class="campo_tipo_material mb-5">
                    <label for="nome">Tipo Do Material</label>
                    <br>
                    <div class="campos_pag_peso input__materiais" id="input_material" required>
                        <?php foreach ($resultadoConsultaMaterial as $linhas_material) { ?>
                            <input class="materiais ms-2" type="radio" id="tipo_material" name="tipo_material" value="<?= $linhas_material['id_material'] ?>" required><label><?= $linhas_material['nome_material'] ?></label>
                        <?php } ?>
                    </div>
                </div>
                <div class="campo_peso mb-5">
                    <label for="nome">Peso</label>
                    <br>
                    <div class="form-floating container_peso">
                        <input class="form-control input_de_peso" name="input_peso" id="input_peso" type="number" step="0.01" placeholder="Digite o peso" onblur="fnValidarPeso()" required>
                        <label for="input_peso">Digite o Peso</label>
                    </div>
                    <span id="erroPeso"></span>
                </div>
                <div class="listas container_data mb-5">
                    <label for="data">Data</label>
                    <br>
                    <input class="campo_data" type="date" value="<?= $dataDiaria ?>" id="input_data" name="input_data" max="<?= $dataDiaria ?>" onblur="fnValidarData()" required>
                    <span id="erroData"></span>
                </div>
                <div class="campo_botao_enviar">
                    <div class="ui button botao_enviar ms-4 col-sm-8 col-md-6 col-lg-6 col-6" tabindex="0">
                        <button type="submit" class="texto_enviar" id="btn_enviar">Enviar</button>
                    </div>
                </div>
            </form>


        </section>
        <section class="historico_pagina_pesagem col-sm-8 col-md-5 col-lg-5 col-6">
            <h3 class="mt-2 titulo">Histórico Diário</h3>
            <table class="ui celled table-striped table tabela_historico_rapido">
                <thead>
                    <tr class="titulos_tabela">
                        <th scope="col">Nome do Funcionário</th>
                        <th scope="col">Tipo Material</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultadoConsultaDiaria as $cadastro_gerais) { ?>
                        <!-- transforma a data do banco em formato da nossa data, a cada item percorrido no foreach -->
                        <!-- DateTime::CreateFromFormat / Cria um objeto de data no formato especifico que for informado, recebe em um formato e transforma em outro -->
                        <?php $data_formatada = DateTime::CreateFromFormat('Y-m-d', $cadastro_gerais['data'])->format('d/m/Y') ?>
                        <tr class="itens_tabela">

                            <td scope="row" data-label="Nome do Funcionário"><?= $cadastro_gerais['nome_do_funcionario'] ?></td>
                            <td data-label="Tipo Material"><?= $cadastro_gerais['nome_material'] ?></td>
                            <td data-label="Peso"><?= $cadastro_gerais['peso'] ?></td>
                            <td data-label="Data"><?= $data_formatada ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/validacao.js"></script>

<?php

include './template/footer.php';

?>