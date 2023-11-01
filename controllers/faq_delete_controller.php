<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/models/faq.php';

try {
    $id = $_GET['id'];

    $faq = new Faq($id);

    $faq->deletar();

    header('Location: /projeto_90/views/admin/faqs_listar.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}