<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/templates/_cabecalho.php';
?>

<section>
    <form action="/projeto_90/controllers/faq_add_controller.php" method="post">
        <div class="col-12">
            <label for="pergunta" class="form-label">Pergunta</label>
            <input type="text" class="form-control" id="pergunta" name="pergunta">
        </div>

        <div class="col-12">
            <label for="resposta" class="form-label">Resposta</label>
            <input type="text" class="form-control" id="resposta" name="resposta">
        </div>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar Faq</button>
    </form>
</section>