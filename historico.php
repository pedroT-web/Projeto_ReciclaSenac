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
                <form method="POST" action="select_historico.php" class="btn-group botoes_acesso_historico" role="group">
                    <div>
                        <label class="label_periodo_inicio">De:</label><input type="date" id="inicio_periodo" name="inicio_periodo" class=" input_periodo">
                    </div>
                    <div>
                        <label class="label_periodo_fim">Até:</label><input type="date" id="fim_periodo" name="fim_periodo" class=" input_periodo periodo_fim">
                    </div>
                    <div>
                        <button type="submit" class="botao_gerar_historico">Gerar Historico</button>
                    </div>
                </form>
                <br>
            </div class="btn-group botoes_acesso_historico" role="group">
            <div>
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
                <a type="button" href="gerar-excel.php" class="btn btn-primary visible content botao_enviar_relatorio">Gerar Relatório</a>
            </div>
        </div>
    </div>
</section>

<?php
include './template/footer.php';

?>