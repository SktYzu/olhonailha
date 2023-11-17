<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';


try {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $


    

    header('Location: /olhonailha/views/perfil.php');
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}
