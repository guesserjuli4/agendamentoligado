<?php
include 'conexao_banco.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idservicos = mysqli_real_escape_string($conexao, $_POST['idservicos']);
    $odontopedi = mysqli_real_escape_string($conexao, $_POST['odontopedi']);
    $endodontia = mysqli_real_escape_string($conexao, $_POST['endodontia']);
    $periodontia = mysqli_real_escape_string($conexao, $_POST['periodontia']);
    $avaliacao = mysqli_real_escape_string($conexao, $_POST['avaliacao']);
    $restauracao = mysqli_real_escape_string($conexao, $_POST['restauracao']);
    $extracao = mysqli_real_escape_string($conexao, $_POST['extracao']);
    $proteseremovivel = mysqli_real_escape_string($conexao, $_POST['proteseremovivel']);

    $sql = "INSERT INTO servicos (idservicos, odontopedi, endodontia, periodontia, avaliacao, restauracao, extracao, proteseremovivel) VALUES ('$idservicos', '$odontopedi', '$endodontia', '$periodontia', '$avaliacao', '$restauracao', '$extracao', '$proteseremovivel')";

    if ($conexao->query($sql) === TRUE) {
        echo "Serviços cadastrados com sucesso!";
    } else {
        echo "Erro ao cadastrar os serviços: " . $conexao->error;
    }

    $conexao->close();
}
?>
