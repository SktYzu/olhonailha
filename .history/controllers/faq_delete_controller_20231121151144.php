<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/faq.php';

try {
    $id = $_GET['id'];

    $faq = new Faq($id);

    $faq->deletar();
    setcookie('msg', "O seu usuario foi atualizado com sucesso!", time() + 5, '/olhonailha/');
    setcookie('tipo', 'sucesso', time() + 5, '/olhonailha/');
    header('Location: /olhonailha/views/admin/faqs_listar.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}