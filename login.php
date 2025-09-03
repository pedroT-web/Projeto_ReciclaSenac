<?php
include './template/header.php';
include './template/modal-redefinirSenha.php';
include './template/modal-cadastrar.php';

?>
<section class="pag_de_login">
    <div class="row container_login">
        <div class="fundo_login col-sm-12 col-md-12 col-lg-12 col-12">
            <h4>Faça login</h4>
            <h5>Somente os Administradores podem acessar o historico </h5>

            <div class="email">
                <label class="titulo_login">Email</label><br>
                <div class="ui input">
                    <input type="email" class="form-control" id="input_email" placeholder="nome@email.com">
                </div>
            </div>
            <div class="senha">
                <label class="titulo_login">Senha</label><br>
                <input type="password" class="form-control" id="input_senha" placeholder="Digite a senha">
            </div>
            <div class="campo_redefinir_senha">
                <label class="esqueceu_senha">
                    Esqueceu a senha? <a data-bs-toggle="modal" data-bs-target="#modalRedefinirSenha">Redefinir</a>
                </label>
                <label class="cadastrar">
                    Não tem cadastro? <a data-bs-toggle="modal" data-bs-target="#modalCadastrar">Cadastrar</a>
                </label>
            </div>
            <div class="espacamento_enviar">
                <a href="./historico.php" class="botao_login">Entrar</a>
            </div>
        </div>
    </div>
</section>

<?php
include    './template/footer.php';
?>