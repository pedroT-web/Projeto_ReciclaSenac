<?php

include './template/header.php';


$dsn = "mysql:dbname=projeto_integrador;host:localhost";
$usuario = 'root';
$senha = '';

$conn = new PDO($dsn, $usuario, $senha);

$scriptConsultaGeral = "SELECT * FROM cadastro_de_peso";

$resultadoConsultaGeral = $conn->query($scriptConsultaGeral)->fetchAll();

$scriptConsulta = "SELECT * FROM tb_funcionarios";

$resultadoConsulta = $conn->query($scriptConsulta)->fetchAll();


$scriptConsultaMaterial = "SELECT * FROM materiais";

$resultadoConsultaMaterial = $conn->query($scriptConsultaMaterial)->fetchAll();
?>

<!-- Página de Pesagem -->
<main class="pagina_de_pesagem" id="pagina_de_pesagem">
    <div class="row">
        <section class="espacamento_input col-sm-10 col-md-6 col-lg-6 col-10">
            <form method="POST" action="processaPesagem.php" class="ms-4">
                <div class="campo_funcionario">
                    <label for="nome_funcionario">Nome Do Funcionário</label>
                    <br>
                    <select class="campos_pag_peso ui search dropdow listas" id="nome_funcionario" name="nome_funcionario">
                        <option>Selecione o Funcionário</option>
                        <?php foreach ($resultadoConsulta as $linhas) { ?>

                            <option name="lista_funcionario" value="<?php $linhas['id_funcionario'] ?>"><?= $linhas['nome_do_funcionario'] ?></option>

                        <?php } ?>

                    </select><br><br><br>
                </div>
                <div class="campo_tipo_material">
                    <label for="nome">Tipo Do Material</label>
                    <br>
                    <select class="campos_pag_peso listas" name="tipo_material" id="nome" required="required">
                        <option name="lista_material" value="">Escolha o Tipo Do Material Que foi pesado</option>
                        <?php foreach ($resultadoConsultaMaterial as $linhas_material) { ?>
                            <option value="<?= $linhas_material['id'] ?>"><?= $linhas_material['nome_material'] ?></option>
                        <?php } ?>
                    </select><br><br><br>
                </div>
                <div class="campo_peso">
                    <label for="nome">Peso</label>
                    <br>
                    <div class="form-floating listas" id="nome">
                        <input class="form-control" name="input_peso" id="input_peso" type="number" placeholder="Digite o peso">
                         <label for="input_peso">Digite o Peso</label>

                        <select class="menu " name="tipo_peso">
                            <option name="lista_peso" value="">Tipo</option>
                            <option name="lista_peso" class="item" value="kg">kg</option>
                            <option name="lista_peso" class="item" value="g">g</option>
                        </select>

                    </div>
                </div><br><br>
                <div class="listas">
                    <label for="nome">Data</label>
                    <br>
                    <input class="campo_data" type="date" id="nome" name="input_data" placeholder="" required><br><br><br>
                </div><br><br>
            </form>

            <div class="campo_botao_enviar">
                <div class="ui button botao_enviar ms-4 col-sm-8 col-md-6 col-lg-6 col-6" tabindex="0">
                    <a class="texto_enviar" href="./cadastrar-diario.php">Enviar</a>
                </div>
            </div>
        </section>
        <section class="historico_pagina_pesagem col-sm-8 col-md-5 col-lg-5 col-6">
            <h3 class="mt-2 titulo">Históricos Diários</h3>
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
                    <?php foreach ($resultadoConsultaGeral as $linhas_gerais) { ?>
                        <tr class="itens_tabela">

                            <td  scope="row" data-label="Nome do Funcionário"><?= $linhas_gerais['id_funcionarios'] ?></td>
                            <td data-label="Tipo Material"><?= $linhas_gerais['tipo_do_material'] ?></td>
                            <td data-label="Peso"><?= $linhas_gerais['peso'] ?></td>
                            <td data-label="Data"><?= $linhas_gerais['data'] ?></td>
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