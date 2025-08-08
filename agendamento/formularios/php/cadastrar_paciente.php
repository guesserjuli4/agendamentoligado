<?php
include 'conexao_banco.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf_paciente']);
    $nome = mysqli_real_escape_string($conexao, $_POST['nome_paciente']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['telefone_paciente']);
    $nascimento = mysqli_real_escape_string($conexao, $_POST['datanasc_paciente']);
    $email = mysqli_real_escape_string($conexao, $_POST['gmail_paciente']);
    $servico = mysqli_real_escape_string($conexao, $_POST['servico']);

    $sql = "INSERT INTO paciente (cpf_paciente, nome_paciente, telefone_paciente, datanasc_paciente, gmail_paciente, servico) VALUES ('$cpf', '$nome', '$telefone', '$nascimento', '$email', '$servico')";

    if ($conexao->query($sql) === TRUE) {
        echo "Paciente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o paciente: " . $conexao->error;
    }

    $conexao->close();
}
?>