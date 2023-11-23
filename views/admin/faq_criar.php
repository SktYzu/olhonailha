<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
?>

<h1 class="display-4 fw-normal text-body-emphasis text-center m-3">Adicionar FAQ</h1>
<section class="d-flex justify-content-center m-3">
    <form action="/olhonailha/controllers/faq_add_controller.php" method="post" class="col col-4 p-3 bg-body-tertiary">
        <div class="col-12">
            <label for="pergunta" class="form-label">Pergunta</label>
            <textarea name="pergunta" id="pergunta" class="form-control" rows="10"></textarea>
        </div>

        <div class="col-12">
            <label for="resposta" class="form-label">Resposta</label>
            <textarea name="resposta" id="resposta" class="form-control" rows="10"></textarea>
        </div>

        <div class="col-6 mt-3 m-auto">
            <button class="w-100 btn btn-success" type="submit">Cadastrar Faq</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>