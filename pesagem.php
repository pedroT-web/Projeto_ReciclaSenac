<?php

include './template/header.php';
require 'config.php';

$dataDiaria = date('Y-m-d');

echo $dataDiaria . "<br>";

// Consulta da tabela de cadastro de peso com uma filtragem diária
$scriptConsultaGeral = "SELECT cad_peso.id, cad_peso.peso,cad_peso.data, tb_func.nome_do_funcionario, tb_func.id_funcionario, tb_mate.id, tb_mate.nome_material FROM cadastro_de_peso AS cad_peso LEFT JOIN tb_funcionarios AS tb_func ON tb_func.id_funcionario = cad_peso.id LEFT JOIN materiais AS tb_mate ON cad_peso.id = tb_mate.id WHERE data = :data" ;
$dadosPreparado = $conn->prepare($scriptConsultaGeral);
$dadosPreparado->execute([
    ":data" => $dataDiaria
]);
$resultadoConsultaDiaria = $dadosPreparado->fetchAll();

// Consulta da tabela de funcionarios para gerar a lista do input de funcionario com dados direto do banco 
$scriptConsulta = "SELECT * FROM tb_funcionarios";
$resultadoConsulta = $conn->query($scriptConsulta)->fetchAll();

// Consulta da tabela de materiais para gerar a lista do input de material com os dados do banco
$scriptConsultaMaterial = "SELECT * FROM materiais";
$resultadoConsultaMaterial = $conn->query($scriptConsultaMaterial)->fetchAll();

var_dump($resultadoConsulta);
?>

<!-- Página de Pesagem -->
<main class="pagina_de_pesagem" id="pagina_de_pesagem">
    <div class="row">
        <section class="espacamento_input col-sm-10 col-md-6 col-lg-6 col-10">
            <form method="POST" action="cadastrar-Pesagem.php" class="ms-4">
                <div class="campo_funcionario">
                    <label for="nome_funcionario">Nome Do Funcionário</label>
                    <br>
                    <select class="campos_pag_peso ui search dropdow listas" id="id_funcionario" name="id_funcionario">
                        <option >Selecione o Funcionário</option>
                        <?php foreach ($resultadoConsulta as $linhas) { ?>
                            <option  value="<?= $linhas['id_funcionario'] ?>"><?= $linhas['nome_do_funcionario'] ?></option>
                        <?php } ?>

                    </select>
                    <br><br><br>
                </div>
                <div class="campo_tipo_material">
                    <label for="nome">Tipo Do Material</label>
                    <br>
                    <div class="campos_pag_peso" id="input_material" required="required">
                        <?php foreach ($resultadoConsultaMaterial as $linhas_material) { ?>
                            <input type="radio" id="tipo_material"  name="tipo_material"  value="<?= $linhas_material['nome_material'] ?>"><label><?= $linhas_material['nome_material'] ?></label>
                        <?php } ?>
                    </div>
                </div>
                <div class="campo_peso">
                    <label for="nome">Peso</label>
                    <br>
                    <div class="form-floating container_peso">
                        <input class="form-control input_de_peso" name="input_peso" id="input_peso" type="number" placeholder="Digite o peso">
                        <label for="input_peso">Digite o Peso</label>
                        <select class="menu " name="tipo_peso">
                            <option value="">Tipo</option>
                            <option class="item" value="KG">kg</option>
                            <option class="item" value="G">g</option>
                        </select>

                    </div>
                </div><br><br>
                <div class="listas">
                    <label for="data">Data</label>
                    <br>
                    <input class="campo_data" type="date" value="<?= $dataDiaria ?>" id="input_data" name="input_data" placeholder="" required><br><br><br>
                </div><br><br>
                <div class="campo_botao_enviar">
                    <div class="ui button botao_enviar ms-4 col-sm-8 col-md-6 col-lg-6 col-6" tabindex="0">
                        <button type="submit" class="texto_enviar">Enviar</button>
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
                        <tr class="itens_tabela">

                            <td scope="row" data-label="Nome do Funcionário"><?= $cadastro_gerais['nome_do_funcionario'] ?></td>
                            <td data-label="Tipo Material"><?= $cadastro_gerais['nome_material'] ?></td>
                            <td data-label="Peso"><?= $cadastro_gerais['peso'] ?></td>
                            <td data-label="Data"><?= $cadastro_gerais['data'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</main>

<?php

include './template/footer.php';

?>