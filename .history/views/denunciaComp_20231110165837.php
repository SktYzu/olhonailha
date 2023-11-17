<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha//controllers/denuControl.php';
try {
    $denuncias = denuncia::carregar();
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>