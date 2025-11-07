<?php
include './template/header.php';
include './template/modal-redefinirSenha.php';
include './template/modal-cadastrar.php';

?>
<section class="pag_de_login">
    <div class="row container_login">
        <?php
        // Verificando a requisição GET enviada pelo arquivo verificarAdmin para exibir a mensagem de erro ao usuário
        if (isset($_GET['usuariologado']) && $_GET["usuariologado"] == 1) { // Mensagem para mostrar que o usuário está incorreto
            echo '<div class="alert alert-danger text-center" role="alert">
                    Nenhum Administrador encontrado!
                </div>';
        } 
        if (isset($_GET["mensagem_erro"]) && $_GET["mensagem_erro"] == 1) {
            echo '<div class="alert alert-danger text-center" role="alert">
                    Administrador não encontrado, para fazer a redefinição de senha digite um administrador válido!
                </div>';
        }
        ?>
        <form class="fundo_login col-sm-12 col-md-12 col-lg-12 col-12" method="POST" action="verificarAdmin.php" onsubmit="return fnValidarLogin(event)">
            <h4>Faça login</h4>
            <h5>Somente os Administradores podem acessar o historico </h5>

            <div class="email">
                <label class="titulo_login mb-1">Email</label>
                <div class="ui input">
                    <input type="email" class="form-control" id="input_email" name="input_email" onblur="fnValidarEmail()" placeholder="nome@email.com" required>
                </div>
                <span id="erroEmail"></span>
            </div>
            <div class="senha">
                <label class="titulo_login mb-1">Senha</label>
                <div class="container_senha">
                    <input type="password" class="form-control input_login" id="input_senha" name="input_senha" placeholder="Digite a senha" onblur="fnValidarSenha()" required>
                    <button type="button" id="visualizarSenha" onclick="fnVisualisarSenha()"><i id="olho" class="bi bi-eye fs-3"></i></button>
                </div>
                <!-- <i class="bi bi-eye-slash"></i> -->
                <span id="erroSenha"></span>
            </div>
            <div class="campo_redefinir_senha">
                <label class="esqueceu_senha">
                    Esqueceu a senha? <a class="link_redefinicao" data-bs-toggle="modal" data-bs-target="#modalRedefinirSenha">Redefinir</a>
                </label>
                <label class="cadastrar">
                    Não tem cadastro? <a class="link_cadastro" data-bs-toggle="modal" data-bs-target="#modalCadastrar">Cadastrar</a>
                </label>
            </div>
            <div class="espacamento_enviar">
                <button type="submit" class="botao_login">Entrar</a>
            </div>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./js/validacao.js"></script>
<script src="./js/visualizarSenha.js"></script>
<?php
include    './template/footer.php';
?>