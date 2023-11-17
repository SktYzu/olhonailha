<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';


try {
    $nome = $_POST['nome']
    

    header('Location: /olhonailha/views/perfil.php');
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}
