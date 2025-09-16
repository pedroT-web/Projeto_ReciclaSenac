<?php

// Página de exemplo do script que vou usar para as tabelas da página de histórico


require('config.php');

$dataHoje = date("Y-m-d");

$data = new DateTime($dataHoje);

$consulta = 7;

$data->sub(new DateInterval("P{$consulta}D"));

$dataAnterior = $data->format('Y-m-d');

echo $dataAnterior;
echo '<br>';
echo $dataHoje;

$script = "SELECT * FROM cadastro_de_peso WHERE data = :data ";

$dadosPreparado = $conn->prepare($script);
$dadosPreparado->execute([
    ':data' => $dataHoje
]);


echo '<pre>';
var_dump($dadosPreparado->fetchAll());


// Estrutura do select da tabela de historico diario, incompleta
// SELECT tb_funcionarios.nome_do_funcionario, tb_funcionarios.id, cadastro_de_peso.peso, cadastro_de_peso.data FROM cadastro_de_peso INNER JOIN tb_funcionarios ON cadastro_de_peso.id_funcionario = tb_funcionarios.id