<?php
require 'config.php';
?>

<div class="modal fade campo_cadastro" id="modalEditarMaterial" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" method="POST" action="editarMaterial.php" onsubmit="fnValidarEnvioFuncionario(event)">
            <div class="modal-header header_cadastro">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Funcionário</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content cadastro">
                    <input type="hidden" class="campoIdmaterial" name="idMaterial">
                    <h5 class="titulos_forms">Nome Do Material</h5>
                    <input type="text" placeholder="Ex: Recíclavel" class="forms_cadastro_funcionario campoMaterial mb-2 w-100 me-5" name="input_novo_nome_func" id="input_novo_nome_func" onblur="fnValidarCadastroFuncionario()" required>
                    <span id="erroFuncionario"></span>
                    <h5 class="titulos_forms">Status do Funcionário</h5>
                    <select class="dropdow listas selectStatusMaterial" id="selectStatusMaterial" name="selectStatusMaterial" required>
                        <option value="Ativo">Ativo</option>
                        <option value="Desativo">Desativo</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer ">
                <div class="actions botoes_redefinir">
                    <button id="fechar_botao" type="button" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    <button type="submit" id="cad_func" name="cad_func">Atualizar</button>
                </div>
            </div>
    </div>
</div>