<?php
require 'config.php';

$selectGerado = $_POST['consultaPeriodo'];

var_dump($selectGerado);

//  Tabela html com o formato da planilha do excel
// Titulo da tabela
$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td colnspan="5"> Planilha de Histórico</ td>';
$html .= '</tr>';

// Colunas que terão na tabela
$html .= '<tr>';
$html .= '<td><b>Peso</b></td>';
$html .= '<td><b>Material</b></td>';
$html .= '<td><b>Funcionário</b></td>';
$html .= '<td><b>data</b></td>';
$html .= '</tr>';

// Consulta no banco
$scriptConsultaGeral = "SELECT cad_peso.id, cad_peso.peso,cad_peso.data, tb_func.nome_do_funcionario, tb_func.id_funcionario, tb_mate.id_material, tb_mate.nome_material FROM cadastro_de_peso AS cad_peso INNER JOIN tb_funcionarios AS tb_func ON tb_func.id_funcionario = cad_peso.id_funcionarios INNER JOIN materiais AS tb_mate ON tb_mate.id_material = cad_peso.id_material";
$resultadoQuery = $conn->query($scriptConsultaGeral)->fetchAll();

// Trazendo os dados do banco em formato de tabela, para trasformar em planilha
foreach ($resultadoQuery as $linha_cadastro) {
    $html .= '<tr>';
    $html .= '<td>' . $linha_cadastro['peso'] . '</td>';
    $html .= '<td>' . $linha_cadastro['nome_material'] . '</td>';
    $html .= '<td>' . $linha_cadastro['nome_do_funcionario'] . '</td>';
    $html .= '<td>' . $linha_cadastro['data'] . '</td>';
    $html .= '</tr>';
}

// Definindo o nome do arquivo que será exportado
$arquivo = "historiocoPesos.xls"; 

header("Expires: 0"); // Serve para evitar cache: toda vez que você acessar, ele baixa de novo.
header("Cache-Control: must-revalidate"); // Obriga o navegador a validar com o servidor em vez de usar uma cópia salva.
header("Content-Type: application/vnd.ms-excel; charset=utf-8"); // Aqui você Define que o arquivo que vem é um excel
header("Content-Disposition: attachment; filename=\"$arquivo\""); // Força o dowload, attachment = baixa o arquivo. filename="$arquivo" utilizou o nome que tinha definido antes para nomear o arquivo
echo $html; // imprime o conteúdo (a tabela HTML que foi criada anteriormente). para o excel transforma-lá em uma planilha

