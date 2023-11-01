<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/models/faq.php';

try {
    $id = $_GET['id'];
    $faq = new Faq($id);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section>
    <form action="/projeto_90/controllers/faq_edit_controller.php" method="post">
        <input type="hidden" name="id" value="<?= $faq->id_faq ?>">

        <div class="col-12">
            <label for="pergunta" class="form-label">Pergunta</label>
            <input type="text" class="form-control" id="pergunta" name="pergunta" value="<?= $faq->pergunta_faq ?>">
        </div>

        <div class="col-12">
            <label for="resposta" class="form-label">Resposta</label>
            <input type="text" class="form-control" id="resposta" name="resposta" value="<?= $faq->resposta_faq ?>">
        </div>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Atualizar Faq</button>
    </form>
</section>