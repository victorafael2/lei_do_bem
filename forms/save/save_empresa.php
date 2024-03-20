<?php
include ("../../conexao/database.php");

// Recuperar os dados do formulário
$username = $_POST['username'];
$cpf = $_POST['cpf'];
$company_name = $_POST['company_name'];
$cnpj = $_POST['cnpj'];
$organization_type = $_POST['organization_type'];
$company_status = $_POST['company_status'];
$capital_origin = $_POST['capital_origin'];
$relationship_group = $_POST['relationship_group'];
$total_employees = $_POST['total_employees'];
$fiscal_incentives = $_POST['fiscal_incentives'];
$login = $_POST['login'];
$password = $_POST['password'];

// Preparar e executar a consulta SQL para inserir os dados
$sql = "INSERT INTO empresas (username, cpf, company_name, cnpj, organization_type, company_status, capital_origin, relationship_group, total_employees, fiscal_incentives, login, password) VALUES ('$username', '$cpf', '$company_name', '$cnpj', '$organization_type', '$company_status', '$capital_origin', '$relationship_group', '$total_employees', '$fiscal_incentives', '$login', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
