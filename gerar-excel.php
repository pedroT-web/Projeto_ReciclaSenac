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

$cabecalho = ["Funcionario", "Material", "Peso", "Data", "Soma Peso"];

$resultado = fopen("php://output", "w");


fputcsv($resultado, $cabecalho, ";");

$resultadoQuery = $peso->fnSelecionarPorPeriodo($dataInicio, $dataFim);

$resultadoSomaReciclavel = $peso->fnSomarReciclavel($dataInicio, $dataFim);


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
