<?php
require 'config.php';
require './class/Peso.php';

$resultadoConsulta = [];

if ($_SERVER["REQUEST_METHOD"] == 'GET' && !empty($_GET)) {
    $id = $_GET['id'];

    $peso = new Peso();

    $resultadoConsulta = $peso->fnConsultarRegistro($id);
}


?>

<div class="modal fade campo_cadastro" id="modalEditarRegistro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" method="POST" action="editarMaterial.php">
            <div class="modal-header header_cadastro">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Material</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php foreach ($resultadoConsulta as $registro) { ?>
                <div class="modal-body">
                    <div class="content cadastro">
                        <h5 class="titulos_forms">Material</h5>
                        <input type="text" placeholder="<?= $registro['nome_do_funcionario'] ?>" class="forms_cadastro_funcionario" name="input_material">
                        <br>
                    </div>
                </div>
                <div class="modal-footer ">
                    <div class="actions botoes_redefinir">
                        <button id="fechar_botao" type="button" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                        <button type="submit" id="cad_func" name="cad_func">Cadastrar</button>
                    </div>
                </div>
            <?php } ?>

        </form>
    </div>
</div>