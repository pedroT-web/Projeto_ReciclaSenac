<div class="modal fade campo_cadastro" id="modalCadastrarFuncionario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" method="POST" action="cadastrar-funcionario.php" onsubmit="return fnValidarEnvioFuncionario(event)">
            <div class="modal-header header_cadastro">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Funcionário</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content cadastro">
                    <h5 class="titulos_forms">Nome Do Funcionário</h5>
                    <input type="text" placeholder="Nome Completo" class="forms_cadastro_funcionario mb-2 w-100 me-5" name="input_nome_func" id="input_nome_func" onblur="fnValidarCadastroFuncionario()" required>
                    <span id="erroFuncionario"></span>
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
