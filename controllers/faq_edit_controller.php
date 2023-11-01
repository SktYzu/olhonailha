<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/models/faq.php';

try {
    $id = $_POST['id'];
    $pergunta = $_POST['pergunta'];
    $resposta = $_POST['resposta'];

    $faq = new Faq($id);

    $faq->pergunta_faq = $pergunta;
    $faq->resposta_faq = $resposta;

    $faq->atualizar();

    header('Location: /projeto_90/views/admin/faqs_listar.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}