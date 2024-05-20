<?php
include ('../../../conexao/database.php');

$id_projeto = $_POST['id_projeto'];
// Inclua o arquivo de conexão com o banco de dados aqui, se necessário

// Consulta SQL para recuperar os dados da tabela "projetos"
$sql = "SELECT id,cpf, nome, titulacao, total_horas, dedicacao, horas_dedicadas, mes, salario_encargos, projeto_id FROM rh where projeto_id = $id_projeto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(array('message' => 'Nenhum resultado encontrado'));
}
