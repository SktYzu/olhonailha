<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
try {
    $id = 
    $titulo = $_POST['titulo'];
    $descricao = $_POST["descricao"];
    $local_denuncia = $_POST['local_denuncia'];
    $id_usuario = $_POST['id_usuario'];
    $id_tipo = $_POST['tipo'];
    if (!empty($_FILES['foto_denuncia']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['foto_denuncia']['tmp_name']);
    }

    $denuncia = new denuncia($id);
    $denuncia->titulo = $titulo;
    $denuncia->descricao = $descricao;
    $denuncia->local_denuncia = $local_denuncia;
    $denuncia->id_usuario = $id_usuario;
    $denuncia->id_tipo = $id_tipo;
    if ($imagem) {
        $denuncia->foto_denuncia = $imagem;
    } else {
        $denuncia->foto_denuncia = $denuncia->foto_denuncia;
    }

    $denuncia->editar();

    header('location:../views/perfil.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
