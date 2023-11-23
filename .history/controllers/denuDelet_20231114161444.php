<?php 
require_once 'denuControl.php';

try {
    $id = $_GET['id'];

    $denuncia= new denuncia($id);

    $denuncia->deletar();

    header('location:../views/control.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}