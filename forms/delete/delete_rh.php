<?php


// Verifica se o ID do registro foi fornecido via POST
if(isset($_POST['id'])) {
    // Conecte-se ao banco de dados (substitua os valores de host, usuário, senha e nome do banco de dados pelos seus próprios)
    include ("../../conexao/database.php");

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara e executa a consulta SQL para excluir o registro com o ID fornecido
    $id = $_POST['id'];
    $sql = "DELETE FROM rh WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    echo "ID do registro não fornecido.";
}
?>
