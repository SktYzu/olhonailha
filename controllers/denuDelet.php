<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';

try {
    $id = $_GET['id'];

    $denuncia= new denuncia($id);

    $denuncia->deletar();

    header('location:../views/perfil.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}