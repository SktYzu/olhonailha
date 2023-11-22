<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
try {
    $id = $_POST['id'];
    $titulo = $_POST['titulo_denuncia'];
    $desc = $_POST['descricao_denuncia'];
    if (!empty($_FILES['foto_denuncia']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['foto_denuncia']['tmp_name']);
    }

    $denuncia = new denuncia($id);
    $denuncia->titulo = $titulo;
    $denuncia->descricao = $desc;
    $denuncia->local_denuncia = $loc;
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
