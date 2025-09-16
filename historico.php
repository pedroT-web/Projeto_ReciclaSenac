<?php
include './template/header.php';

// if(isset($_SESSION) || empty($_SESSION['id_logado'])){
//     header('location:./login.php');
// }

?>

<section class="pag_historico">
    <div class="agrupamento_historico">
        <div class="local_historico">
            <div class="espacamento_historico">
                <div class="btn-group botoes_acesso_historico" role="group">
                    <button type="button" class="btn btn-primary botoes_2">Diário</button>
                    <button type="button" class="btn btn-primary botoes_2">Mensal</button>
                    <button type="button" class="btn btn-primary botoes_2">Anual</button>
                </div>
                <br>
            </div>
            <table class="ui celled ui celled table-striped table tabela_historicos">
                <thead>
                    <tr>
                        <th>Nome do Funcionário</th>
                        <th>Tipo Material</th>
                        <th>Peso</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="itens_tabela">
                        <td>John Lilki</td>
                        <td>September 14, 2013</td>
                        <td>jhlilk22@yahoo.com</td>
                        <td>No</td>
                    </tr>
                    <tr class="itens_tabela_segundo">
                        <td>Jamie Harington</td>
                        <td>January 11, 2014</td>
                        <td>jamieharingonton@yahoo.com</td>
                        <td>Yes</td>
                    </tr>
                    <tr class="itens_tabela">
                        <td>Jill Lewis</td>
                        <td>May 11, 2014</td>
                        <td>jilsewris22@yahoo.com</td>
                        <td>Yes</td>
                    </tr>
                    <tr class="itens_tabela_segundo">
                        <td>Jill Lewis</td>
                        <td>May 11, 2014</td>
                        <td>jilsewris22@yahoo.com</td>
                        <td>Yes</td>
                    </tr>
                    <tr class="itens_tabela">
                        <td>Jill Lewis</td>
                        <td>May 11, 2014</td>
                        <td>jilsewris22@yahoo.com</td>
                        <td>Yes</td>
                    </tr>
                    <tr class="itens_tabela_segundo">
                        <td>Jill Lewis</td>
                        <td>May 11, 2014</td>
                        <td>jilsewris22@yahoo.com</td>
                        <td>Yes</td>
                    </tr>
                    <tr class="itens_tabela">
                        <td>Jill Lewis</td>
                        <td>May 11, 2014</td>
                        <td>jilsewris22@yahoo.com</td>
                        <td>Yes</td>
                    </tr>
                    <tr class="itens_tabela_segundo">
                        <td>Jill Lewis</td>
                        <td>May 11, 2014</td>
                        <td>jilsewris22@yahoo.com</td>
                        <td>Yes</td>
                    </tr>
                    <tr class="itens_tabela">
                        <td>Jill Lewis</td>
                        <td>May 11, 2014</td>
                        <td>jilsewris22@yahoo.com</td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="campo_botao_enviar">
            <div class="ui button botao_relatorio ms-4 col-sm-8 col-md-6 col-lg-6 col-6" tabindex="0">
                <button type="button" class="btn btn-primary visible content botao_enviar_relatorio">Gerar Relatório</button>
            </div>
        </div>
    </div>
</section>

<?php
include './template/footer.php';

?>