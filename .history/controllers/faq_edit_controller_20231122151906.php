<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/faq.php';

try {
    $id = $_POST['id'];
    $pergunta = $_POST['pergunta'];
    $resposta = $_POST['resposta'];

    $faq = new Faq($id);

    $faq->pergunta_faq = $pergunta;
    $faq->resposta_faq = $resposta;

    $faq->atualizar();

    header('Location: /olhonailha/views/perfil.php');
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}