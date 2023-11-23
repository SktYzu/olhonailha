<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha//controllers/denuControl.php';
try {
    $denuncias = denuncia::listar();
} catch (PDOException $e) {
    echo $e->getMessage();


?>



<div>
<table class="table table table-striped center d-flex justify-content-center ">
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Denuncia</th>
        <th>Localidade</th>
        <th>Foto Da Denuncia</th>
        <?php if ($_SESSION['usuario']['nivel_acesso'] = 1): ?>
            <th colspan="2">
                <a href="adicionar.php">Adicionar</a>
            </th>
        <?php endif; ?>
        <!-- <th>Hora da Denuncia</th> --> ;
    </tr>
    <?php foreach ($denuncias as $d): ?>
        <tr>
            <td>
                <?= $d['id_denuncia'] ?>
            </td>
            <td>
                <?= $d['titulo'] ?>
            </td>
            <td>
                <?= $d['descricao'] ?>
            </td>
            <td>
                <?= $d['local_denuncia'] ?>
            </td>
            <td><img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="" width="30%"></td>
            <?php if ($_SESSION['usuario']['nivel_acesso'] > 1): ?>
                <td>
                    <a href="editar.php?id=<?= $d['id_denuncia'] ?>">Editar</a>
                </td>
                <td>
                    <a href="../controllers/denuDelet.php?id=<?= $d['id_denuncia'] ?>">Deletar</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>
</div>