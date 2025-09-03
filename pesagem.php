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
            <div class="ms-4">
                <div class="campo_funcionario">
                    <label for="nome">Nome Do Funcionário</label>
                    <br>
                    <select class="campos_pag_peso ui search dropdow listas" id="nome">
                        <option value="">Selecione o Funcionário</option>
                        <?php foreach($resultadoConsulta as $linhas) { ?>

                            <option name="lista_funcionario" value="<?php $id_Funcionario ?>"><?= $linhas['nome_do_funcionario'] ?></option>

                        <?php } ?>
                        
                    </select><br><br><br>
                </div>
                <div class="campo_tipo_material">
                    <label for="nome">Tipo Do Material</label>
                    <br>
                    <select class="campos_pag_peso listas" name="tipo_material" id="nome" required="required">
                        <option name="lista_material" value="">Escolha o Tipo Do Material Que foi pesado</option>
                        <?php foreach($resultadoConsultaMaterial as $linhas_material) { ?>
                            <option value=""><?= $linhas_material['nome_meterial']?></option>
                        <?php } ?>
                        <option name="lista_material" value="Recíclavel">Recíclavel</option>
                        <option name="lista_material" value="Não Recíclavel">Não Recíclavel</option>
                    </select><br><br><br>
                </div>
                <div class="campo_peso">
                    <label for="nome">Peso</label>
                    <br>
                    <div class="ui right labeled input listas" id="nome">
                        <input name="input_peso" type="number" placeholder="Digite o peso">
                        <div class="ui dropdown label lista_peso">
                            <div class="text">Escolha o tipo de peso</div>
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <div name="lista_peso" class="item">kg</div>
                                <div name="lista_peso" class="item">g</div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="listas">
                    <label for="nome">Data</label>
                    <br>
                    <input class="campo_data" type="date" id="nome" name="input_data" placeholder="" required><br><br><br>
                </div><br><br>
            </div>

            <div class="campo_botao_enviar">
                <div class="ui button botao_enviar ms-4 col-sm-8 col-md-6 col-lg-6 col-6" tabindex="0">
                    <div type="submit" class="visible content texto_enviar" action="./form-cadastro-peso.php">Enviar</div>
                </div>
            </div>
        </section>
        <section class="historico_pagina_pesagem col-sm-8 col-md-5 col-lg-5 col-6">
            <h3 class="mt-2 titulo">Históricos Diários</h3>
            <table class="ui celled striped table tabela_historico_rapido">
                <thead>
                    <tr class="titulos_tabela">
                        <th>Nome do Funcionário</th>
                        <th>Tipo Material</th>
                        <th>Peso</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultadoConsultaGeral as $linhas_gerais) { ?>
                        <tr class="itens_tabela">
                        
                        <td data-label="Nome do Funcionário"><?= $linhas_gerais['id_funcionarios'] ?></td>
                        <td data-label="Tipo Material"><?= $linhas_gerais['tipo_do_material']?></td>
                        <td data-label="Peso"><?= $linhas_gerais['peso']?></td>
                        <td data-label="Data"><?= $linhas_gerais['data']?></td>
                    </tr>
                    <?php }?>
                    
                </tbody>
            </table>
        </section>
    </div>

    <script>
        $('.lista_peso').dropdown()
    </script>
</main>

<?php

include './template/footer.php';

?>