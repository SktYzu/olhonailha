<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';


try {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $categoria = new TipoDenuncia();
    $categoria->nome = $nome;
    $categoria->descricao = $descricao;

    $categoria->criar();
    setcookie('msg', "Tipo adicionado com sucesso", time() + 5, '/olhonailha/');
    setcookie('tipo', 'sucesso', time() + 5, '/olhonailha/');

    header('Location: /olhonailha/views/perfil.php');
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
}
