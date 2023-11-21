<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuncia.php';

try {
    $titulo = $_POST['titulo'];
    $descricao = $_POST["descricao"];
    $local_denuncia = $_POST['local_denuncia'];
    /* $id_usuario = $_POST['id_usuario']; */
    /* $id_tipo = $_POST['tipo']; */

    if (!empty($_FILES['foto_denuncia']['tmp_name'])) {
        $foto = file_get_contents($_FILES['foto_denuncia']['tmp_name']);
    }


    $denuncia = new denuncia();
    $denuncia->titulo = $titulo;
    $denuncia->descricao = $descricao;
    $denuncia->local_denuncia = $local_denuncia;
    /* $denuncia->id_usuario = $id_usuario; */
   /*  $denuncia->id_tipo = $id_tipo; */
    if ($foto) {
        $denuncia->foto_denuncia = $foto;
    } else {
        $denuncia->foto_denuncia = file_get_contents('../imgs/erro.jpg');
    }
    $denuncia->criar();

    header('Location: /olhonailha/index.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}