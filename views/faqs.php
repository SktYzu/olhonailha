<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_90/models/faq.php';

try {
    $faqs = Faq::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<section class="container-fluid mt-3">
    <h1 class="display-4 fw-normal text-body-emphasis text-center">FAQs</h1>

    <div class="accordion" id="accordionExample">
        <?php foreach ($faqs as $item) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <?= $item['pergunta_faq'] ?>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?= $item['resposta_faq'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>