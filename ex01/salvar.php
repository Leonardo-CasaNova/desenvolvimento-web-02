<?php
$method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'UNKNOWN';

$headers = apache_request_headers();

// Dados recebidos via POST e GET
$post = $_POST;
$get = $_GET;

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados recebidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dados da requisição</h1>

    <p><strong>Método:</strong> <?php echo htmlspecialchars($method); ?></p>

    <h2>Dados enviados (POST)</h2>
        <ul>
            <li><?php print_r($post); ?></li>
    </ul>

    <h2>Dados enviados (GET)</h2>
        <ul>
            <li><?php print_r($get); ?></li>
        </ul>

    <h2>Cabeçalhos HTTP</h2>
        <ul>
            <li><?php print_r($headers); ?></li>
        </ul>
</body>
</html>
