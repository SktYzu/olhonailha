<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/faq.php';

try {
    $pergunta = $_POST['pergunta'];
    $resposta = $_POST['resposta'];

    $faq = new Faq();
    $faq->pergunta_faq = $pergunta;
    $faq->resposta_faq = $resposta;

    $faq->criar();

    header('Location: /olhonailha/views/admin/faqs_listar.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}