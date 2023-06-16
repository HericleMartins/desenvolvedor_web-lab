<?php
session_start();
if(isset($_GET['sair'])){
    unset($_SESSION['user']);
}
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === '12345') {
        $_SESSION['user'] = $username;
        header('Location: prova.php');
        exit();
    } else {
        echo 'Usuário ou senha incorretos.';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Prova - Login</title>
    <link rel="stylesheet" type="text/css" href="../css/prova/style.css">
</head>

<body>
    <div class="container">
    <a href="../" class="back">Voltar</a>
        <h1>Login </h1>
        <form method="post" action="login.php">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>