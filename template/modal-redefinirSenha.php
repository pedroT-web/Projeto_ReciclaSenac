<div class="modal fade campo_redefinicao" id="modalRedefinirSenha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal" method="POST" action="redefinicaoSenha.php">
            <div class="modal-header header_redefinicao">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Redefinir Senha</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content redefinicao_senha">
                    <div class="mb-4">
                        <h5 class="titulos_forms">Email</h5>
                        <input type="email" placeholder="Digite o seu Email" class="forms_redefinicao w-75" name="email_redefinicao">
                    </div>
                    <div>
                        <h5 class="titulos_forms">Senha Atual</h5>
                        <input type="Text" placeholder="Digite a sua senha atual" class="forms_redefinicao" name="senha_redefinicao">
                    </div>
                    <div class="mb-4">
                        <h5 class="titulos_forms">Nova Senha</h5>
                        <button type="button" id="" onclick="fnVisualiszarSenha()"><i id="olho" class="bi bi-eye fs-3"></i></button>
                        <input type="password" placeholder="8 caracteres ou mais" class="forms_redefinicao" name="nova_senha_redefinicao">

                    </div>
                    <div class="mb-4">
                        <h5 class="titulos_forms">Confirmar Senha</h5>
                        <input type="password" placeholder="Confirmar a nova senha" class="forms_redefinicao" name="conf_nova_senha_redefinicao">
                        <button type="button"  onclick="fnVisualisarSenha()"><i id="olho" class="bi bi-eye fs-3"></i></button>
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