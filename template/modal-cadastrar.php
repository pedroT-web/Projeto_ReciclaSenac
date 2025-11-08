<div class="modal fade campo_cadastro" id="modalCadastrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" action="cadastrar-administrador.php" onsubmit="fnValidarCadastro(event)">
            <div class="modal-header header_cadastro">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content cadastro">
                    <div class="mb-4">
                        <h5 class="titulos_forms">Email</h5>
                        <input type="email" name="input_email" id="inputEmailCadastro" placeholder="seuEmail@exemplo.com" class="forms_redefinicao" onblur="fnValidarEmailRedefinicao()" require>
                        <span id="erroEmailCadastro"></span>
                    </div>
                    <div class="mb-4 container_nova_senha">
                        <h5 class="titulos_forms">Senha Atual</h5>
                        <input type="password" placeholder="8 caracteres ou mais" class="forms_redefinicao" id="inputSenhaCadastro" name="inputSenhaCadastro" onblur="">
                        <button type="button" id="visualizarSenhaCadastro" onclick="fnVisualisarSenhaCadastro()" require><i id="botaoSenhaCadastroOlho" class="bi bi-eye fs-3"></i></button>
                        <span id="erroSenhaCadastro"></span>
                    </div>
                    <div class="mb-4 container_nova_senha">
                        <h5 class="titulos_forms">Confirmar Senha</h5>
                        <input type="password" placeholder="8 caracteres ou mais" class="forms_redefinicao" id="inputConfirmarSenhaCadastro" name="nova_senha_redefinicao" onblur="fnValidarSenhasCadastro() ">
                        <button type="button" id="visualizarConfirmarSenhaCadastro" onclick="fnVisualisarConfirmarSenhaCadastro()" require><i id="botaoConfirmarSenhaCadastroOlho" class="bi bi-eye fs-3"></i></button>
                        <span id="erroConfirmarSenhaCadastro"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <div class="actions botoes_redefinir">
                    <button type="button" id="fechar_botao" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    <button id="salvar_senha" type="">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>