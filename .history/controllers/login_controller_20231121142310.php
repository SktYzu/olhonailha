<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';

try {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    Usuario::logar($email, $senha);
    header('Location: /olhonailha/views/perfil..php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}


