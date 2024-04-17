<?php
include ("../../conexao/database.php");
// Supondo que você já tenha uma conexão com o banco de dados estabelecida

// Verifica se o ID do projeto foi fornecido na URL
if(isset($_GET['id_projeto'])) {
    $id_projeto = $_GET['id_projeto'];

    // Consulta para buscar todos os detalhes do projeto com base no ID fornecido
    $sql = "SELECT * FROM propriedade WHERE projeto_id = $id_projeto ";
    $resultado = mysqli_query($conn, $sql);

    // Verifica se há resultados
    if(mysqli_num_rows($resultado) > 0) {
        // Inicie a variável $html com a tag de abertura da tabela
        $html = '<table class="table">';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th>Concessão de Patente</th>';
        $html .= '<th>Gastos</th>';
        $html .= '<th>Valor</th>';
        $html .= '</tr>';
        $html .= '</thead>';
        $html .= '<tbody>';

        // Loop através de cada linha do resultado da consulta
        while($row = mysqli_fetch_assoc($resultado)) {
            // Adicione uma nova linha à tabela para cada registro
            $html .= '<tr>';
            $html .= '<td>' . $row['propriedade_intelectual'] . '</td>';
            $html .= '<td>' . $row['gastos'] . '</td>';
            $html .= '<td>' . $row['valor'] . '</td>';
            $html .= '</tr>';
        }

        // Feche a tabela
        $html .= '</tbody>';
        $html .= '</table>';

        echo $html;
    } else {
        echo "Nenhum financiamento encontrado para este projeto.";
    }
} else {
    echo "ID do projeto não fornecido.";
}
?>
