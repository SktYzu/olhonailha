<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
?>

<section class="d-flex justify-content-center m-3">
<div id="carouselExample" class="carousel slide col col-lg-6 col-sm-11">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/olhonailha/imgs/Agua.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/olhonailha/imgs/Buracos.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imgs/senergia.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>
