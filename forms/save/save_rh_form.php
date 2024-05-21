<?php
include("../../conexao/database.php");

// Verifica se projeto_id_id existe e decide entre INSERT e UPDATE
if (isset($_POST['projeto_id_id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['projeto_id_id']);

    // Recebe os dados do formulário e remove possíveis ataques de SQL Injection
    $cpf = mysqli_real_escape_string($conn, $_POST['cpfField']);
    $nome = mysqli_real_escape_string($conn, $_POST['nomeField']);
    $titulacao = mysqli_real_escape_string($conn, $_POST['titulacaoField']);
    $total_horas = mysqli_real_escape_string($conn, $_POST['totalHorasField']);
    $dedicacao = mysqli_real_escape_string($conn, $_POST['dedicacaoField']);
    $horas_dedicadas = mysqli_real_escape_string($conn, $_POST['horasDedicadasField']);
    $mes = mysqli_real_escape_string($conn, $_POST['mesField']);
    $salario_encargos = mysqli_real_escape_string($conn, $_POST['salarioEncargosField']);
    $cargo = mysqli_real_escape_string($conn, $_POST['cargoField']);
    $funcao = mysqli_real_escape_string($conn, $_POST['funcaoField']);
    $funcionario_novo = mysqli_real_escape_string($conn, $_POST['funcionario_novo_field']);
    $dt_contratacao = mysqli_real_escape_string($conn, $_POST['dt_contratacaoField']);
    $projeto_id = isset($_POST['projeto_id']) ? mysqli_real_escape_string($conn, $_POST['projeto_id']) : mysqli_real_escape_string($conn, $_POST['projeto_id']);

    // Preparar e executar a consulta SQL para atualizar os dados
    $sql = "UPDATE rh SET cpf=?, nome=?, titulacao=?, total_horas=?, dedicacao=?, horas_dedicadas=?, mes=?, salario_encargos=?, cargo=?, funcao=?, funcionario_novo=?, dt_contratacao=?,projeto_id=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssi", $cpf, $nome, $titulacao, $total_horas, $dedicacao, $horas_dedicadas, $mes, $salario_encargos, $cargo, $funcao, $funcionario_novo, $dt_contratacao, $projeto_id, $id);
} else {
    // Recebe os dados do formulário e remove possíveis ataques de SQL Injection
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $titulacao = mysqli_real_escape_string($conn, $_POST['titulacao']);
    $total_horas = mysqli_real_escape_string($conn, $_POST['total_horas']);
    $dedicacao = mysqli_real_escape_string($conn, $_POST['dedicacao']);
    $horas_dedicadas = mysqli_real_escape_string($conn, $_POST['horas_dedicadas']);
    $mes = mysqli_real_escape_string($conn, $_POST['mes']);
    $salario_encargos = mysqli_real_escape_string($conn, $_POST['salario_encargos']);
    $projeto_id = isset($_POST['projeto_id_id']) ? mysqli_real_escape_string($conn, $_POST['projeto_id_id']) : mysqli_real_escape_string($conn, $_POST['projeto_id']); // Verifica se projeto_id_id existe, se sim, usa-o, senão, usa projeto_id
    $cargo = mysqli_real_escape_string($conn, $_POST['cargo']);
    $funcao = mysqli_real_escape_string($conn, $_POST['funcao']);
    $funcionario_novo = mysqli_real_escape_string($conn, $_POST['funcionario_novo']);
    $dt_contratacao = mysqli_real_escape_string($conn, $_POST['dt_contratacao']);
    // Preparar e executar a consulta SQL para inserir os dados
    $sql = "INSERT INTO rh (cpf, nome, titulacao, total_horas, dedicacao, horas_dedicadas, mes, salario_encargos, projeto_id, cargo, funcao, funcionario_novo, dt_contratacao)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssissss", $cpf, $nome, $titulacao, $total_horas, $dedicacao, $horas_dedicadas, $mes, $salario_encargos, $projeto_id, $cargo, $funcao, $funcionario_novo, $dt_contratacao);
}

if ($stmt->execute()) {
    echo "Dados inseridos/atualizados com sucesso!";
} else {
    echo "Erro ao inserir/atualizar dados: " . $conn->error;
}

$conn->close();
