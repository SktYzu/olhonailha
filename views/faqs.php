<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/faq.php';

try {
    $faqs = Faq::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
<h1 class="display-4 fw-normal text-body-emphasis text-center m-3">FAQs</h1>
<section class="container-fluid mt-3 col col-6">
    <div class="accordion" id="accordionExample">
        <?php foreach ($faqs as $item) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $item['id_faq'] ?>" aria-expanded="false" aria-controls="collapseOne">
                        <?= $item['pergunta_faq'] ?>
                    </button>
                </h2>
                <div id="collapse<?= $item['id_faq'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?= $item['resposta_faq'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>