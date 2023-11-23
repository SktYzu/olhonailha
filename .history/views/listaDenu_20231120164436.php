<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
try {
    $denuncias = denuncia::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}
/* try {
    $denuncias = denuncia::listarsitu(1);
} catch (PDOException $e) {
    echo $e->getMessage();
} */

/* if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
} */
?>

<div class="centro">
    <a href="Adddenu.php" class="btn btn-primary m-3">Adicionar Denuncia +</a>
</div>

<div class="container_card">
    <?php foreach ($denuncias as $d) : ?>
        <div class="card_f">
            <div class="card-flex">
                <div style="width: 100%;">
                    O usuario :<?= $d['id_usuario'] ?>, postou a seguinte denuncia :
                </div>
                <div style="dis width: 300px; height: 200px;">
                    <img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="">
                </div>
                <div class="card-desc">

                    <div>

                        <h4 style="font-size: 2.2vw;">
                            <?= $d['titulo'] ?>
                            <?php if (isset($d['situacao'])) : ?>
                                <?php if ($d['situacao'] == 1) : ?>
                                    : Em Aberto!
                                <?php endif; ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div>
                        <h5 style="font-size: 2vw;">descrição:</h5>
                        <p class="texto_limitado">
                            <?= $d['descricao'] ?>
                        </p>
                    </div>
                    <div>
                        <h5 style="font-size: 2vw;">Local:</h5>
                        <p>
                            <?= $d['local_denuncia'] ?>


                        </p>
                    </div>
                    <p>Data e Hora:<br>
                        <?= $d['data_hora'] ?></p>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>