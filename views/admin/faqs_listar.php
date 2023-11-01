<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/models/faq.php';

try {
    $faqs = Faq::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<table class="table table-striped">
    <tr>
        <th>id</th>
        <th>Pergunta</th>
        <th>Resposta</th>
        <th colspan="2">
            <a href="/projeto_90/views/admin/faq_criar.php">Adicionar</a>
        </th>
    </tr>

    <?php foreach ($faqs as $f) : ?>
        <tr>
            <td><?= $f['id_faq'] ?></td>
            <td><?= $f['pergunta_faq'] ?></td>
            <td><?= $f['resposta_faq'] ?></td>
            <td>
                <a href="/projeto_90/views/admin/faq_editar.php?id=<?= $f['id_faq'] ?>">Editar</a>
            </td>
            <td>
                <a href="/projeto_90/controllers/faq_delete_controller.php?id=<?= $f['id_faq'] ?>">Deletar</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>