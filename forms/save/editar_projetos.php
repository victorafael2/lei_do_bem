<?php
include ("../../conexao/database.php");

// Recuperar os dados do formulário
$id_projeto = $_POST['id_projeto']; // Adicione esta linha para capturar o ID do projeto
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
$data_inicio = $_POST['data_inicio'];
$data_termino = $_POST['data_termino'];
$resultados_economicos = $_POST['resultados_economicos'];
$resultados_inovacao = $_POST['resultados_inovacao'];

// Preparar e executar a consulta SQL para atualizar os dados
$sql = "UPDATE projetos SET
            ano_base = '$ano_base',
            nome_projeto = '$nome_projeto',
            detalhamento_projeto = '$detalhamento_projeto',
            tipo_projeto = '$tipo_projeto',
            area_projeto = '$area_projeto',
            natureza_projeto = '$natureza_projeto',
            palavras_chave = '$palavras_chave',
            elemento_tecnologico = '$elemento_tecnologico',
            metodologia = '$metodologia',
            barreiras_desafios = '$barreiras_desafios',
            plurianual = '$plurianual',
            data_inicio = '$data_inicio',
            data_termino = '$data_termino',
            resultados_economicos = '$resultados_economicos',
            resultados_inovacao = '$resultados_inovacao'
        WHERE id = $id_projeto";

if ($conn->query($sql) === TRUE) {
    echo "Projeto atualizado com sucesso!";
} else {
    echo "Erro ao atualizar o projeto: " . $conn->error;
}

$conn->close();
?>
