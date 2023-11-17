<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
try {
    $titulo = $_POST['foto_denucia'];
    $descricao = $_POST['descricao'];
    $local_denuncia=$_POST['local_denuncia'];
    $id_usuario=$_POST['id_usuario'];
    $id_tipo=$tipo['tipo'];


    $denucia= new Denuncia();
    $denucia->titulo = $titulo;
    $denuncia->descricao = $descricao;
    $denucia->id_usuario = $id_usuario;
    $denucia->id_tipo = $id_tipo;

    $denuncia->criar();

    header('Location: /olhonailha/index.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
