<?php
require 'config.php';
require './class/Peso.php';

$peso = new Peso();

$dataInicio = $_GET['inicioPeriodo'];
$dataFim = $_GET['fimPeriodo'];


// Tabela html com o formato da planilha do excel
// Titulo da tabela
$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td> Planilha de Histórico</ td>';
$html .= '</tr>';

// Colunas que terão na tabela
$html .= '<tr>';
$html .= '<td><b>Funcionário</b></td>';
$html .= '<td><b>Material</b></td>';
$html .= '<td><b>Peso</b></td>';
$html .= '<td><b>data</b></td>';
$html .= '</tr>';

// Consulta no banco
$resultadoQuery = $peso->fnSelecionarPorPeriodo($dataInicio, $dataFim);

// Trazendo os dados do banco em formato de tabela, para trasformar em planilha
foreach ($resultadoQuery as $linha_cadastro) {
    $html .= '<tr>';
    $html .= '<td>' . $linha_cadastro['nome_do_funcionario'] . '</td>';
    $html .= '<td>' . $linha_cadastro['nome_material'] . '</td>';
    $html .= '<td>' . $linha_cadastro['peso'] . '</td>';
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

