<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
try {
    $id = $_GET["id"];
    $denuncia = new denuncia($id);
    $tipos = TipoDenuncia::listar();
} catch (PDOException $th) {
    echo $th->getMessage();

}
?>

<div class="container mt-5">
    <h2>Formulário de Denúncia</h2>
    <form action="/olhonailha/controllers/denuncia_add_controller.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required value="<?=$denuncia->titulo?>">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4" required><?=$denuncia->descr?>"</textarea>
        </div>
        <div class="mb-3">
            <label for="foto_denuncia" class="form-label">Foto da Denúncia</label>
            <input type="file" class="form-control" id="foto_denuncia" name="foto_denuncia" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="local_denuncia" class="form-label">Local da Denúncia</label>
            <input type="text" class="form-control" id="local_denuncia" name="local_denuncia" required value="<?=$denuncia->titulo?>">
        </div>
        <div class="mb-3">
            <label for="id_usuario" class="form-label">ID do Usuário</label>
            <input type="number" class="form-control" id="id_usuario" name="id_usuario"
                value="<?= $_SESSION['usuario']['id_usuario'] ?>">
        </div>
        <div class="mb-3">
            <label for="id_tipo" class="form-label">ID do Tipo</label>
            <select name="tipo" id="tipo">
                <option value="<?=$denuncia->titulo?>"></option>
                <?php foreach ($tipos as $tipo): ?>
                    <option value="<?= $tipo["id_tipo"] ?>">
                        <?= $tipo["id_tipo"] ?>-
                        <?= $tipo["nome"] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Denúncia</button>
    </form>
</div>