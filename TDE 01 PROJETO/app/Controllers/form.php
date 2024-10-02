<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if (empty($nome) || empty($email)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        // Aqui você pode continuar com o processamento (armazenar no banco, etc.)
    }
}

else {
        echo "Método de requisição inválido.";
}