<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("você não pode acessar essa página porque não esta logado. <p> <a href=\"login.php\">sair</a></p>");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?></h1>
 <a href="index.php"> <button>SAIR</button></a>
</body>
</html>
