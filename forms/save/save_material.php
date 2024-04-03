<?php
// Verifica se foi uma requisição POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados - Substitua os valores pelos seus próprios
    include ("../../conexao/database.php");

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara os dados para inserção no banco de dados
    $projeto_id = $_POST['projeto_id'];
    $descricao = $_POST['desc_itens'];
    $valor = $_POST['valor'];
    $detail = $_POST['detalhe'];


    // Insere os dados na tabela
    $sql = "INSERT INTO material (projeto_id, descricao, valor, detail) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $projeto_id, $descricao, $valor, $detail);

    if ($stmt->execute() === TRUE) {
        // Se a inserção for bem-sucedida, retorna uma resposta de sucesso
        echo "success";
    } else {
        // Se houver um erro na inserção, retorna uma mensagem de erro
        echo "Erro ao inserir no banco de dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
    $conn->close();
} else {
    // Se não for uma requisição POST, retorna uma mensagem de erro
    echo "Método não permitido";
}
?>
