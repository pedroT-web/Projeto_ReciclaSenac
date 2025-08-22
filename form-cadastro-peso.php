<?php

var_dump($_POST);

$dsn = "mysql:dbname=projeto_integrador;host:localhost";
$usuario = 'root';
$senha = '';

$conn = new PDO($dsn, $usuario, $senha);

$funcionario = $_POST['lista_funcionario'];
$material = $_POST['lista_material'];
$peso = $_POST['input_peso'];
$tipo_peso = $_POST['lista_peso'];
$data = $_POST['input_data'];

// Crie um objeto DateTime para transformar a string recebida em data
$transformarData = new DateTime($data);

// Formatar a data em formato para o banco de dados
$dataFormatada = $transformarData->format('Y-m-d');

$data = $dataFormatada;

// Script para inserir os dados no banco
$scriptInserirPeso = "INSERT INTO cadastro_de_peso (
id, 
peso,
tipo_material,
id_funcionarios,
data
) Values (
:pesos,
:materiais,
:funcionario,
:datas
);
";

// Script que pega os dados e separa para agrupalos no futuro
$scriptPreparo = $conn->prepare($scriptInserirPeso);

// Script que pega os dados separados, e junta os para ser utilizados na exibição
$scriptPreparo->execute([
':funcionario' =>  $funcionario,
':pesos' => $peso,
':materiais' => $material,
':datas' => $data
]);

header('location:pesagem.php');