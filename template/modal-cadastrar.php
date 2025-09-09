<div class="modal fade campo_cadastro" id="modalCadastrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form class="modal-content conteudo_modal">
            <div class="modal-header header_cadastro">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar</h1>
                <button type="button" class="btn-close botao_X" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content cadastro">
                    <h5 class="titulos_forms">Email</h5>
                    <input type="email" name="input_email" placeholder="seuEmail@exemplo.com" class="forms_redefinicao">
                    <h5 class="titulos_forms">Telefone</h5>
                    <input type="Text" name="input_telefone" placeholder="(xx) xxxxx-xxxx" class="forms_redefinicao">
                    <h5 class="titulos_forms">Senha</h5>
                    <input type="password" name="input_senha" placeholder="8 caracteres ou mais" class="forms_redefinicao">
                    <h5 class="titulos_forms">Confirmar Senha</h5>
                    <input type="password" name="input_confirmarSenha" placeholder="Confirmar a nova senha" class="forms_redefinicao">
                    <br>
                    <br>
                </div>
            </div>
            <div class="modal-footer ">
                <div class="actions botoes_redefinir">
                    <button id="fechar_botao" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    <button id="salvar_senha" type="">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>