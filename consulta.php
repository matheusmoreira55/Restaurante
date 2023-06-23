<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores enviados pelo formulário
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];

    // Conecta ao banco de dados e realiza a consulta
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurantedb";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara a consulta SQL
    $sql = "SELECT nome, email FROM usuario WHERE nome = '$usuario' AND email = '$email'";

    // Executa a consulta
    $result = $conn->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        // Obtém os dados do usuário
        $row = $result->fetch_assoc();
        $nome = $row["nome"];
        $email = $row["email"];
// Redirecionar para outra_pagina.php
header("Location: cardapio.php");
exit; // Certifique-se de chamar exit ou die após o redirecionamento para interromper a execução do script atual
    } else {

        header("Location: relogin.php");
    }

    // Fecha a conexão
    $conn->close();
}
?>
