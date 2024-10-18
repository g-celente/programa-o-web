<?php 


require_once '../Models/conection.php';
require_once '../Models/table_contato.php';

$contato = new Contato();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['txtName']) ? $_POST['txtName'] : '';
    $email = isset($_POST['txtEmail']) ? $_POST['txtEmail']: '';
    $telefone = isset($_POST['txtPhone']) ? $_POST['txtPhone'] : ''; 
    $descricao = isset($_POST['duvida']) ? $_POST['duvida'] : '';

    if (empty($name) || empty($email) || empty($telefone) || empty($descricao)) {
        echo 'Por favor, preencha todos os campos.';
        return false;
    }

    $result = $contato->insertValues($name, $email, $telefone, $descricao);
    
    if ($result == 'Contato Inserido com Sucesso') {
        header('Location: /programa-o-web/HAMBURGUERIA/app/Views/index.php');
        exit();
    }
    else {
        header('Location: /programa-o-web/HAMBURGUERIA/app/Views/contact.php');
        exit();
    }
}
