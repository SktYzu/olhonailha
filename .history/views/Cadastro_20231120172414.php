<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
?>

<section class="d-flex justify-content-center m-5">
    <form action="/olhonailha/controllers/login_controller.php" method="post" enctype="multipart/form-data"
        class="d-flex flex-column align-items-center bg-body-tertiary p-5 border rounded">
        <div class="mb-3 w-100">
            <label for="email" class="form-label"></label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3 w-100">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3 w-100">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <button type="submit" class="btn btn-primary">Logar-se</button>
    </form>
</section>