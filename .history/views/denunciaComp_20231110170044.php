<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha//controllers/denuControl.php';
try {
    $id = $_GET['id'];
    $denuncia = new denuncia($id);
} catch (PDOException $e) {
    $e->getMessage();
}

?>