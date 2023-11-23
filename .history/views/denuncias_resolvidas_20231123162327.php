<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';
try {
    $denuncias = denuncia::listar(2);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<div class="titulo" style="background-color: green; color:white; text-align:center">
    <h1>Denúncias solucionadas</h1>
</div>
<section class="container_card">

    <?php foreach ($denuncias as $d): ?>
        <container class="card_f">
            <div class="conteudo">
                <?php $id = $d['id_usuario'];
                $usuario = new usuario($id);
                ?>
                <div style="width: 100%;">
                    O usuario
                    <?= $usuario->nome ?> postou a seguinte denuncia :
                </div>
                <br>
                <br>

                <div class="titulo">
                    <h2>
                        <?= $d['titulo'] ?>
                    </h2>
                </div>
                <div class="situacao">
                    <h5>Situação:</h5>
                    <?php if (isset($d['situacao'])): ?>
                        <?php if ($d['situacao'] == 2): ?>
                            <h5 style="color:green" ;>Solucionada!</h5>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>

                <div class="local">
                    <h5>Local:</h5>
                    <p>
                        <?= $d['local_denuncia'] ?>
                    </p>
                </div>

                <div class="descricao">
                    <h5>Descrição</h5>
                    <p>
                        <?= $d['descricao'] ?>
                    </p>
                </div>



                <img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="">



            </div>
        </container>

    <?php endforeach; ?>

</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>