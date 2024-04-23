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
    $n_equipamento_internacional = $_POST['n_equipamento_internacional'];
    $nota_fiscal_equipamento_internacional = $_POST['nota_fiscal_equipamento_internacional'];
    $valor_equipamento_internacional = $_POST['valor_equipamento_internacional'];
    $especificacao_equipamento_internacional = $_POST['especificacao_equipamento_internacional'];





// Insere os dados na tabela
$sql = "INSERT INTO equipamento_internacional (projeto_id, n_equipamento_internacional, nota_fiscal_equipamento_internacional, valor_equipamento_internacional, especificacao_equipamento_internacional) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isssd", $projeto_id, $n_equipamento_internacional, $nota_fiscal_equipamento_internacional, $valor_equipamento_internacional, $especificacao_equipamento_internacional);

// Executa a instrução preparada
$stmt->execute();


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
