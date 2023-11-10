<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha//controllers/denuControl.php';
try {
    $denuncias = denuncia::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

/* if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
} */
?>


<div class="container">
    <?php foreach ($denuncias as $d): ?>
        <div class="card">
            <div>
            <img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="" width="380px">
            </div>
            <div class="card-desc">
                <div>
                    <h1>
                        Teste
                    </h1>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut autem id qui culpa. Ratione illum enim
                        commodi dolorem natus? Ratione obcaecati ullam non velit adipisci cumque quaerat repellat dolor
                        cupiditate?
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>