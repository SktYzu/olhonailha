<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';


try {
    $titulo = $_POST[
        "titulo"
    ];
    $descricao = $_POST[
        "descricao"
    ];
    $localidade = $_POST['local_denuncia'];

    if (empty($titulo) || empty($descricao) || empty($localidade)) {
        header('location:../views/index.php');
        exit();
    }

    if (!empty($_FILES['foto_denuncia']['tmp_name'])) {
        $foto = file_get_contents($_FILES['foto_denuncia']['tmp_name']);
    }

    $denuncia = new denuncia();
    $denuncia->titulo = $titulo;
    $denuncia->descricao = $descricao;
    $denuncia->local_denuncia = $localidade;
    if ($foto) {
        $denuncia->foto_denuncia = $foto;
    } else {
        $denuncia->foto_denuncia = file_get_contents('../models/erro.jpg');
    }

    $denuncia->criar();

    header('Location: /olhonailha/views/listaDenu.php');
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}
