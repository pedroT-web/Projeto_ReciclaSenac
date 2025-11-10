<?php
require 'config.php';
require './class/Peso.php';

$peso = new Peso();

$dataInicio = $_GET['inicioPeriodo'];
$dataFim = $_GET['fimPeriodo'];

$arquivo = "historiocoPesos.csv";
header("Expires: 0");
header("Cache-Control: must-revalidate");
header("Content-Type: text/csv; charset=UTF-8");
header("Content-Disposition: attachment; filename=\"$arquivo\"");


$html = "";

$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td> Planilha de Histórico</ td>';
$html .= '</tr>';

$cabecalho = ["Funcionario", "Material", "Peso", "Data"];

$resultado = fopen("php://output", "w");


fputcsv($resultado, $cabecalho, ";");

$resultadoQuery = $peso->fnSelecionarPorPeriodo($dataInicio, $dataFim);



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

fputcsv($resultado, [], ";");

$totaisPorMaterial = $peso->fnSomarTodosMateriais($dataInicio, $dataFim);

fputcsv($resultado, ["", "Totais por Material:"], ";");

$totalGeral = 0;

foreach ($totaisPorMaterial as $linha) {
    $somaFormatada = str_replace('.', ',', $linha['totalSoma']);
    fputcsv($resultado, ["", $linha['nome_material'], $somaFormatada], ";");
    $totalGeral += $linha['totalSoma'];
}

// Linha final com total geral
fputcsv($resultado, [], ";");
fputcsv($resultado, ["", "Total Geral:", str_replace('.', ',', $totalGeral)], ";");
