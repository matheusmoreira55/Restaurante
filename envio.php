<?php
// Dados de conexão com o banco de dados
$servername = "localhost"; // Nome do servidor
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "restaurantedb"; // Nome do banco de dados

// Criando a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recuperando os dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereço'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

// Inserindo os dados na tabela do banco de dados
$sql = "INSERT INTO usuario (CPF, nome, email, telefone, CEP, estado, cidade, bairro, endereço, número, complemento)
        VALUES ('$cpf', '$nome', '$email', '$telefone', '$cep', '$estado', '$cidade', '$bairro', '$endereco', '$numero', '$complemento')";

if ($conn->query($sql) === TRUE) {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao cadastrar os dados: " . $conn->error;
}

// Fechando a conexão com o banco de dados
$conn->close();

?>

