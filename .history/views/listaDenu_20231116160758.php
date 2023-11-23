<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
try {
    $denuncias = denuncia::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

/* if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
} */
?>

<div class="centro">
    <a href="#" class="btn btn-primary m-3">Adicionar Denuncia +</a>
</div>

<div class="container_card">
    <?php foreach ($denuncias as $d): ?>
        <div class="card">
            <div class="card-flex">
                <img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="" width="300px"
                    height="200px">
                    <div class="card-desc">
                        <div>
                            <h4>
                                <?= $d['titulo'] ?> 
                                <?php if (isset($d['situacao'])): ?>
                                    <?php if ($d['situacao'] == 1): ?>
                                        : Em Aberto!
                                    <?php endif; ?>
                                <?php endif; ?> 
                            </h4> 
                        </div>
                        <div>
                            <h5>descrição:</h5>
                            <p class="texto_limitado">
                                <?= $d['descricao'] ?>
                            </p>
                        </div>
                        <div>
                            <h5>Local:</h5>
                            <p>
                                <?= $d['local_denuncia'] ?>
                                <?php date("j, n, Y")?>
                                
                            </p>
                        </div>
                    </div>
            </div>
            <div class="card-uh">
                <?= $d['data_hora']?>

            </div>
        </div>
    <?php endforeach; ?>
</div>