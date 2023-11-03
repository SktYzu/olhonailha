<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/faq.php';

try {
    $faqs = Faq::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section class="m-3">
<h1 class="display-4 fw-normal text-body-emphasis text-center m-3">Gerenciar FAQs</h1>
    <table class="table table-striped text-center">
        <tr>
            <th>id</th>
            <th>Pergunta</th>
            <th>Resposta</th>
            <th colspan="2">
                <a href="/olhonailha/views/admin/faq_criar.php" class="btn btn-outline-success">Adicionar</a>
            </th>
        </tr>

        <?php foreach ($faqs as $f) : ?>
            <tr>
                <td><?= $f['id_faq'] ?></td>
                <td><?= $f['pergunta_faq'] ?></td>
                <td><?= $f['resposta_faq'] ?></td>
                <td>
                    <a href="/olhonailha/views/admin/faq_editar.php?id=<?= $f['id_faq'] ?>" class="btn btn-outline-primary">Editar</a>
                </td>
                <td>
                    <a href="/olhonailha/controllers/faq_delete_controller.php?id=<?= $f['id_faq'] ?>" class="btn btn-outline-danger">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</section>