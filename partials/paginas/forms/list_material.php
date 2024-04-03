<?php
include ('../../../conexao/database.php');

if(isset($_GET['id_projeto'])) {
    $id_projeto = $_GET['id_projeto'];
} elseif(isset($_POST['id_projeto'])) {
    $id_projeto = $_POST['id_projeto'];
} else {
    // Se nenhum valor for encontrado, defina um valor padrão ou trate o erro conforme necessário
    $id_projeto = null; // ou qualquer outro valor padrão
}
// Inclua o arquivo de conexão com o banco de dados aqui, se necessário

// Consulta SQL para recuperar os dados da tabela "projetos"
$sql = "SELECT * FROM material where projeto_id = $id_projeto";
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