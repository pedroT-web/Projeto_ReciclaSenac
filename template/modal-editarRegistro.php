<?php
require 'config.php';
require './class/Peso.php';
require './class/Funcionario.php';
require './class/Material.php';

$id = $_GET['id'] ?? null;

$peso = new Peso();
$funcionario = new Funcionario();
$material = new Material();

// $resultadoConsulta= $peso->fnConsultarRegistro($id);


$select = "SELECT cad_peso.id, cad_peso.peso, cad_peso.data, tb_func.id_funcionario, tb_func.nome_do_funcionario, tb_mate.id_material, tb_mate.nome_material FROM cadastro_de_peso AS cad_peso INNER JOIN tb_funcionarios AS tb_func ON tb_func.id_funcionario = cad_peso.id_funcionarios INNER JOIN materiais AS tb_mate ON tb_mate.id_material = cad_peso.id_material WHERE id = :id";

$prepararSelect = $conn->prepare($select);
$prepararSelect->execute([
    ":id" => $id
]);
$resultadoSelect = $prepararSelect->fetch();

$resultadoSelectFuncionarios = $funcionario->fnSelecionarFuncionarios();

$resultadoSelectMateriais = $material->fnSelecionarMateriais();
?>

<div class="modal fade campo_cadastro" id="modalEditarRegistro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" method="POST" action="editarMaterial.php">
            <div class="modal-header header_cadastro">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Material</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="content cadastro col-6 mb-2">
                    <h5 class="titulos_forms">Material</h5>
                    <select class="campos_pag_peso ui search dropdow listas" id="select_funcionario" name="id_funcionario" onblur="fnValidarMaterial()" required>
                        <option value="0" disabled selected required><?= $resultadoSelect['nome_material'] ?></option>
                        <?php foreach ($resultadoSelectMateriais as $linhas) { ?>
                            <option value="<?= $linhas['id_material'] ?>"><?= $linhas['nome_material'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="content cadastro col-6 mb-2">
                    <h5 class="titulos_forms">Funcionário</h5>
                    <select class="campos_pag_peso ui search dropdow listas" id="select_funcionario" name="id_funcionario" onblur="fnValidarFuncionario()" required>
                        <option value="0" disabled selected required><?= $resultadoSelect['nome_do_funcionario'] ?></option>
                        <?php foreach ($resultadoSelectFuncionarios as $linhas) { ?>
                            <option value="<?= $linhas['id_funcionario'] ?>"><?= $linhas['nome_do_funcionario'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="content cadastro col-6 mb-2">
                    <h5 class="titulos_forms">Peso</h5>
                    <input type="text" value="<?= $resultadoSelect['peso'] ?>" class="forms_cadastro_funcionario w-100" name="input_material" onblur="fnValidarPeso()">
                </div>
                <div class="content cadastro col-6 mb-2">
                    <h5 class="titulos_forms">Data</h5>
                    <input type="date" value="<?= $resultadoSelect['data'] ?>" class="forms_cadastro_funcionario w-100" name="input_material" onblur="fnValidarData()">
                </div>

            </div>
            <div class="modal-footer ">
                <div class="actions botoes_redefinir">
                    <button id="fechar_botao" type="button" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    <button type="submit" id="cad_func" name="cad_func">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>