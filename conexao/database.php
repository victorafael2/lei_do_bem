<?php

    // Seleciona as configurações do banco de dados com base no ambiente

//     if ($_SERVER['SERVER_NAME'] === 'localhost') {
//         $servername = "localhost";
//         $username = "root";
//         $password = "";
//         $connname = "lei_do_bem";
// } else {
//     require('../ssh/phpseclib-master/phpseclib/Net/SSH2.php');


//     $ssh = new Net_SSH2('191.96.31.197'); // Substitua 'localhost' pelo endereço do servidor SSH remoto
// if (!$ssh->login('victorrafael', 'victor001@2023')) {
//     exit('Falha na autenticação SSH');
// }

    $servername = "banco-matech.cr68o4qiqxql.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "JlSjm7oNI58qtJcDjBZs";
    $connname = "u358437276_leidobem";
            // $servidor = "localhost";
            // $usuario = "xpeer_adm";
            // $senha = "xpeer_adm_victor";
            // $dbname = "xpeer_adm";

// }

// Create connection
$conn = new mysqli($servername, $username, $password, $connname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    // echo "sucess";

//     $result = mysqli_query($conn, "SELECT id, senha FROM empresas");

// while ($row = mysqli_fetch_assoc($result)) {
//     $hashedPassword = password_hash($row['senha'], $hashAlgo);

//     $updateQuery = "UPDATE empresas SET senha = '$hashedPassword' WHERE id = {$row['id']}";
//     mysqli_query($conn, $updateQuery);
// }


}

?>