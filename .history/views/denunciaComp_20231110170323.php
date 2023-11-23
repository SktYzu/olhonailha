<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha//controllers/denuControl.php';
try {
    $id = $_GET['id'];
    $denuncia = new denuncia($id);
} catch (PDOException $e) {
    $e->getMessage();
}

?>



<div class="container_card">
        <div class="card">
            <div>
            <img src="data:image;charset=utf8;base64,<?= base64_encode($denuncia->foto_denuncia) ?>" alt="" width="380px" height="280px">
            </div>
            <div class="card-desc">
                <div>
                    <h1>
                        <?=$denuncia->titulo?>
                    </h1>
                </div>
                <div>
                    <h3>descrição:</h3>
                    <p class="texto_limitado">
                    <?=$denuncia->descricao?>
                    </p>
                    <a href="denunciaComp.php?id=<?=$d['id_denuncia']?>">Leia Mais ... </a>
                    
                </div>
                <div>
                    <h3>Local:</h3>
                    <p><?=$denuncia['local_denuncia']?></p>
                </div>
            </div>
        </div>
</div>