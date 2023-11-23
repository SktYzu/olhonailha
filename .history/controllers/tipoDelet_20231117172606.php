<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/';

try {
    $id = $_GET['id'];

    $denuncia= new denuncia($id);

    $denuncia->deletar();

    header('location:../views/admin/controlDenu.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}