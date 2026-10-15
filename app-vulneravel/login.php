<?php
// LAB VULNERAVEL - USO EDUCACIONAL - NAO USAR EM PRODUCAO
// Este script faz parte de um lab isolado em localhost.
// Nenhum dado real é coletado.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validação estática apenas para demonstração de lab
    if ($username === "admin" && $password === "senha123") {
        echo "<h1>Acesso concedido! Bem-vindo ao Lab.</h1>";
    } else {
        echo "<h1>Falha na autenticação. Usuário ou senha incorretos.</h1>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
