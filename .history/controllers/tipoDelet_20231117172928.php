<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';

try {
    $id = $_GET['id'];

    $categoria= new TipoDenuncia($id_tipo);

    $categoria->deletar();

    header('location:../views/admin/controlDenu.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}