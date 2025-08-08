<?php
include 'conexao_banco.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idlista = mysqli_real_escape_string($conexao, $_POST['idlista']);
    $nomepaciente = mysqli_real_escape_string($conexao, $_POST['nomepaciente']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    $servico = mysqli_real_escape_string($conexao, $_POST['servico']);
    $colaboradoradmin_matricula = mysqli_real_escape_string($conexao, $_POST['colaboradoradmin_matricula']);

    $sql = "INSERT INTO listaspera (idlista, nomepaciente, telefone, servico, colaboradoradmin_matricula) VALUES ('$idlista', '$nomepaciente', '$telefone', '$servico', '$colaboradoradmin_matricula')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro na lista de espera realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar na lista de espera: " . $conexao->error;
    }

    $conexao->close();
}
?>
