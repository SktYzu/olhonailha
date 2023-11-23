<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] .'/olhonailha//controllers/denuControl.php';
?>

try {
    $denuncias = denuncia::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}

<div class="container">

    <div class="card">
        <div>
            <img src="../imgs/dummy.png" alt="" width="380px" height="240px">
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
</div>