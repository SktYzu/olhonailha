<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';

try {
    $id = $_GET['id'];

    $categoria= new TipoDenuncia($id);

    $categoria->deletar();
    setcookie('msg', "Tipo foi atualizado com sucesso!", time() + 5, '/olhonailha/');
    setcookie('tipo', 'sucesso', time() + 5, '/olhonailha/');
    header('location:../views/perfil.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}