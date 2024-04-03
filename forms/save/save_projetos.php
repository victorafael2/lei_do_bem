<?php
include ("../../conexao/database.php");

// Recuperar os dados do formulário
$ano_base = $_POST['ano_mes_base'];
$nome_projeto = $_POST['nome_projeto'];
$detalhamento_projeto = $_POST['detalhamento_projeto'];
$tipo_projeto = $_POST['tipo_projeto'];
$area_projeto = $_POST['area_projeto'];
$natureza_projeto = $_POST['natureza_projeto'];
$palavras_chave = $_POST['palavras_chave'];
$elemento_tecnologico = $_POST['elemento_tecnologico'];
$metodologia = $_POST['metodologia'];
$barreiras_desafios = $_POST['barreiras_desafios'];
$plurianual = $_POST['plurianual'];
// Verificar se a data de início está definida, se não estiver, defina-a como a data atual
if (!isset($_POST['data_inicio']) || empty($_POST['data_inicio'])) {
    $data_inicio = date('Y-m-d');
} else {
    $data_inicio = $_POST['data_inicio'];
}

// Verificar se a data de término está definida, se não estiver, defina-a como a data atual
if (!isset($_POST['data_termino']) || empty($_POST['data_termino'])) {
    $data_termino = date('Y-m-d');
} else {
    $data_termino = $_POST['data_termino'];
}
$resultados_economicos = $_POST['resultados_economicos'];
$resultados_inovacao = $_POST['resultados_inovacao'];

// Preparar e executar a consulta SQL para inserir os dados
$sql = "INSERT INTO projetos (ano_base, nome_projeto, detalhamento_projeto, tipo_projeto, area_projeto, natureza_projeto, palavras_chave, elemento_tecnologico, metodologia, barreiras_desafios, plurianual, data_inicio, data_termino, resultados_economicos, resultados_inovacao) VALUES ('$ano_base', '$nome_projeto', '$detalhamento_projeto', '$tipo_projeto', '$area_projeto', '$natureza_projeto', '$palavras_chave', '$elemento_tecnologico', '$metodologia', '$barreiras_desafios', '$plurianual', '$data_inicio', '$data_termino', '$resultados_economicos', '$resultados_inovacao')";

if ($conn->query($sql) === TRUE) {
    echo "Projeto cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
