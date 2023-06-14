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

// Verificar se o usuário existe no banco de dados
$sql = "SELECT * FROM usuarios WHERE user_usu = '$nome'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password_usu'];
    
    // Verificar se a senha está correta
    if (password_verify($senha, $hashed_password)) {
        // Iniciar a sessão
        session_start();
        
        // Armazenar o ID do usuário na sessão
        $_SESSION['user_id'] = $row['id'];
        
        // Redirecionar para a página
        header("Location: sessao.php");
        exit();
    } else {
        echo "<script>alert('Senha incorreta.'); window.location.href = 'login.php';</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado.'); window.location.href = 'login.php';</script>";
}

$conn->close();
