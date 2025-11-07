<div class="modal fade campo_cadastro" id="modalCadastrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" action="cadastrar-administrador.php">
            <div class="modal-header header_cadastro">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content cadastro">
                    <div class="mb-4">
                        <h5 class="titulos_forms">Email</h5>
                        <input type="email" name="input_email" placeholder="seuEmail@exemplo.com" class="forms_redefinicao">
                    </div>
                    <div class="mb-4 container_nova_senha">
                        <h5 class="titulos_forms">Senha Atual</h5>
                        <input type="password" placeholder="8 caracteres ou mais" class="forms_redefinicao" id="inputSenhaAtual" name="inputSenhaAtual" onblur="">
                        <button type="button" id="visualizarSenhaCadastro" onclick="fnVisualisarSenhaAtual()"><i id="botaoSenhaAtualOlho" class="bi bi-eye fs-3"></i></button>
                        <span id="erroSenhaAtualRedefinicao"></span>
                    </div>
                    <div class="mb-4 container_nova_senha">
                        <h5 class="titulos_forms">Confirmar Senha</h5>
                        <input type="password" placeholder="8 caracteres ou mais" class="forms_redefinicao" id="input_nova_senha" name="nova_senha_redefinicao" onblur="">
                        <button type="button" id="visualizarConfirmarSenhaCadastro" onclick="fnVisualisarNovaSenha()"><i id="nova_senha_olho" class="bi bi-eye fs-3"></i></button>
                        <span id="erroNovaSenhaRedefinicao"></span>
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