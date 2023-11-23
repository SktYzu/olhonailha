<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/faq.php';

try {
    $id = $_GET['id'];
    $faq = new Faq($id);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<h1 class="display-4 fw-normal text-body-emphasis text-center m-3">Editar FAQ</h1>
<section class="d-flex justify-content-center m-3">
    <form action="/olhonailha/controllers/faq_edit_controller.php" method="post" class="col col-4 p-3 bg-body-tertiary">
        <input type="hidden" name="id" value="<?= $faq->id_faq ?>">

        <div class="col-12">
            <label for="pergunta" class="form-label">Pergunta</label>
            <textarea name="pergunta" id="pergunta" class="form-control" rows="10"><?= $faq->pergunta_faq ?></textarea>
        </div>

        <div class="col-12">
            <label for="resposta" class="form-label">Resposta</label>
            <textarea name="resposta" id="resposta" class="form-control" rows="10"><?= $faq->resposta_faq ?></textarea>
        </div>

        <div class="col-6 mt-3 m-auto">
            <button class="w-100 btn btn-success" type="submit">Atualizar Faq</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>