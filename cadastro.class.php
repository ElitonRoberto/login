<?php
// Conexão com o banco de dados
$host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "login";
$db_port = "3306";

$conn = new mysqli($host, $db_user, $db_password, $db_name, $db_port);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter os dados do formulário
$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

// Criptografar a senha
$hashed_password = password_hash($senha, PASSWORD_DEFAULT);

// Inserir usuário no banco de dados
$sql = "INSERT INTO usuarios (user_usu, password_usu) VALUES ('$nome', '$hashed_password')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Usuário cadastrado com sucesso!'); window.location='login.php';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar o usuário: " . $conn->error . "'); window.location='cadastro.php';</script>";
}

$conn->close();
