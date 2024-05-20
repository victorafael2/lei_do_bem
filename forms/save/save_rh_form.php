<?php
include ("../../conexao/database.php");

// Recebe os dados do formulário e remove possíveis ataques de SQL Injection
$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$titulacao = mysqli_real_escape_string($conn, $_POST['titulacao']);
$total_horas = mysqli_real_escape_string($conn, $_POST['total_horas']);
$dedicacao = mysqli_real_escape_string($conn, $_POST['dedicacao']);
$horas_dedicadas = mysqli_real_escape_string($conn, $_POST['horas_dedicadas']);
$mes = mysqli_real_escape_string($conn, $_POST['mes']);
$salario_encargos = mysqli_real_escape_string($conn, $_POST['salario_encargos']);
$projeto_id = mysqli_real_escape_string($conn, $_POST['projeto_id']);
$cargo = mysqli_real_escape_string($conn, $_POST['cargo']);
$funcao = mysqli_real_escape_string($conn, $_POST['funcao']);
$funcionario_novo = mysqli_real_escape_string($conn, $_POST['funcionario_novo']);
$dt_contratacao = mysqli_real_escape_string($conn, $_POST['dt_contratacao']);

// Preparar e executar a consulta SQL para inserir os dados
// Prepara e executa a consulta SQL para inserir os dados na tabela usando instruções preparadas
$sql = "INSERT INTO rh (cpf, nome, titulacao, total_horas, dedicacao, horas_dedicadas, mes, salario_encargos, projeto_id,cargo,funcao,funcionario_novo,dt_contratacao)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssissss", $cpf, $nome, $titulacao, $total_horas, $dedicacao, $horas_dedicadas, $mes, $salario_encargos, $projeto_id, $cargo, $funcao, $funcionario_novo, $dt_contratacao);

if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}


$conn->close();
?>
