<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';

try {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $id = $_POST['id_tipo'];

    $categoria = new TipoDenuncia($id);
    $categoria->nome = $nome;
    $categoria->descricao = $descricao;
    $categoria->editar();

    header('location:../views/perfil.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
