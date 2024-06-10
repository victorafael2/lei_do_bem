<?php
// Verifica se o ID do registro foi fornecido via POST
if(isset($_POST['id'])) {
    // Conecte-se ao banco de dados (substitua os valores de host, usuário, senha e nome do banco de dados pelos seus próprios)
    include ("../../conexao/database.php");

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara e executa a consulta SQL para obter os dados do registro com o ID fornecido
    $id = $_POST['id'];
    $sql = "SELECT * FROM terceiros WHERE id = $id";
    $result = $conn->query($sql);

    // Verifica se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        // Obtém os dados do registro
        $row = $result->fetch_assoc();
        // Retorna os dados como JSON
        echo json_encode($row);
    } else {
        echo "Nenhum registro encontrado com o ID fornecido.";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    echo "ID do registro não fornecido.";
}
?>
