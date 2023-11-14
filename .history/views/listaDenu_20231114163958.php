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

<div class>
    <h1>Aqui pode ser um botão de adicionar denuncia ? </h1>
</div>

<div class="container_card">
    <?php foreach ($denuncias as $d): ?>
        <div class="card">
            <div>
            <img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="" width="300px" height="200px">
            </div>
            <div class="card-desc">
                <div>
                    <h4>
                        <?=$d['titulo']?>  :em aberto
                    </h4>
                </div>
                <div>
                    <h5>descrição:</h5>
                    <p class="texto_limitado">
                    <?=$d['descricao']?>
                    </p>
                </div>
                <div>
                    <h5>Local:</h5>
                    <p><?=$d['local_denuncia']?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>