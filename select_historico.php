
<?php
require 'config.php';

var_dump($_POST);


if (isset($_POST['inicio_periodo']) && !empty($_POST['inicio_periodo'])) {
    $dataInicio = $_POST['inicio_periodo'];
    $dataFim = $_POST['fim_periodo'];
    var_dump($dataInicio);

    $select = "SELECT * FROM cadastro_de_peso WHERE data BETWEEN :data_inicio AND :data_fim";

    $preparaSelect = $conn->prepare($select);
    $preparaSelect->execute([
        ":data_inicio" => $dataInicio,
        "data_fim" => $dataFim
    ]);
    $resultadoConsulta = $preparaSelect->fetchAll();

    var_dump($resultadoConsulta);
}
