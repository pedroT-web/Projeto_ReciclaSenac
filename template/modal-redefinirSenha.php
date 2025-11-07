<div class="modal fade campo_redefinicao" id="modalRedefinirSenha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" method="POST" action="redefinicaoSenha.php" onsubmit="fnValidarRedefinicaoSenha(event)">
            <div class="modal-header header_redefinicao">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Redefinir Senha</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content redefinicao_senha">
                    <div class="mb-4">
                        <h5 class="titulos_forms">Email</h5>
                        <input type="email" placeholder="Digite o seu Email" class="forms_redefinicao" id="email_redefinicao" name="email_redefinicao" onblur="fnValidarEmailRedefinicao()">
                        <span id="erroEmailRedefinicao"></span>
                    </div>
                    <div class="container_nova_senha mb-4">
                        <h5 class="titulos_forms">Senha Atual</h5>
                        <input type="password" placeholder="8 caracteres ou mais" class="forms_redefinicao" id="inputSenhaAtual" name="inputSenhaAtual" onblur="fnValidarSenhaAtualRedefinicao()">
                        <button type="button" id="visualizar_senha_atual" onclick="fnVisualisarSenhaAtual()" ><i id="botaoSenhaAtualOlho" class="bi bi-eye fs-3"></i></button>
                        <span id="erroSenhaAtualRedefinicao"></span>
                    </div>
                    <div class="container_nova_senha mb-4">
                        <h5 class="titulos_forms">Nova Senha</h5>
                        <input type="password" placeholder="8 caracteres ou mais" class="forms_redefinicao" id="input_nova_senha" name="nova_senha_redefinicao" onblur="fnValidarNovaSenhaRedefinicao()"> 
                        <button type="button" id="visualizar_nova_senha" onclick="fnVisualisarNovaSenha()"><i id="nova_senha_olho" class="bi bi-eye fs-3"></i></button>
                        <span id="erroNovaSenhaRedefinicao"></span>
                    </div>
                    <div class="container_nova_senha mb-4">
                        <h5 class="titulos_forms">Confirmar Senha</h5>
                        <input type="password" placeholder="Confirmar a nova senha" class="forms_redefinicao" id="input_confirmar_senha" name="conf_nova_senha_redefinicao" onblur="fnValidarConfirmarSenhaRedefinicao(); fnValidarSenhasIguais()">
                        <button type="button" id="visualizar_confirmar_senha" onclick="fnVisualisarConfirmarSenha()"><i id="conf_senha_olho" class="bi bi-eye fs-3"></i></button>
                        <span id="erroConfirmarSenhaRedefinicao"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="actions botoes_redefinir">
                    <button id="fechar_botao_redefinicao" type="button" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    <button id="salvar_nova_senha" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>