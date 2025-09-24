<div class="modal fade campo_cadastro" id="modalCadastrarMaterial" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" method="POST" action="cadastrar-material.php">
            <div class="modal-header header_cadastro">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Material</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content cadastro">
                    <h5 class="titulos_forms">Material</h5>
                    <input type="text" placeholder="Recíclavel" class="forms_cadastro_funcionario" name="input_material">
                    <br>
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

