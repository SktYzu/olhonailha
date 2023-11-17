<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';


try {
    

    header('Location: /olhonailha/views/perfil.php');
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}
