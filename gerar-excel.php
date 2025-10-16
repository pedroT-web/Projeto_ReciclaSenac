<?php
require 'config.php';
require './class/Peso.php';

$peso = new Peso();

$dataInicio = $_GET['inicioPeriodo'];
$dataFim = $_GET['fimPeriodo'];

// Definindo o nome do arquivo que será exportado
$arquivo = "historiocoPesos.csv";
header("Expires: 0"); // Serve para evitar cache: toda vez que você acessar, ele baixa de novo.
header("Cache-Control: must-revalidate"); // Obriga o navegador a validar com o servidor em vez de usar uma cópia salva.
header("Content-Type: text/csv; charset=UTF-8"); // Aqui você Define que o arquivo que vem é um excel
header("Content-Disposition: attachment; filename=\"$arquivo\""); // Força o dowload, attachment = baixa o arquivo. filename="$arquivo" utilizou o nome que tinha definido antes para nomear o arquivo


$html = ""; // imprime o conteúdo (a tabela HTML que foi criada anteriormente). para o excel transforma-lá em uma planilha

// Tabela html com o formato da planilha do excel
// Titulo da tabela

$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td> Planilha de Histórico</ td>';
$html .= '</tr>';

// Colunas que terão na tabela
$cabecalho = ["Funcionario", "Material", "Peso", "Data"];

$resultado = fopen("php://output", "w");


fputcsv($resultado, $cabecalho, ";");

// Consulta no banco
$resultadoQuery = $peso->fnSelecionarPorPeriodo($dataInicio, $dataFim);


// Trazendo os dados do banco em formato de tabela, para trasformar em planilha
foreach ($resultadoQuery as $linha_cadastro) {

    $adicionandoVirgula = str_replace('.', ',', $linha_cadastro['peso']);

    $arrey = [
        $linha_cadastro['nome_do_funcionario'],
        $linha_cadastro['nome_material'],
        $adicionandoVirgula,
        $linha_cadastro['data']
    ];


    fputcsv($resultado, $arrey, ";");
}
