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


<div class="container_card">
    <?php foreach ($denuncias as $d): ?>
        <div class="card">
            <div>
            <img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="" width="380px" height="280px">
            </div>
            <div class="card-desc">
                <div>
                    <h1>
                        <?=$d['titulo']?>
                    </h1>
                </div>
                <div>
                    <p>
                    <?=$d['descricao']?>
                    </p>
                </div>
                <div>
                    <p><?=?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>