<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
  exit();
}
?>


<section style="margin: 1rem auto">
  <h1 style="text-align: center;">Categorias Denúncia</h1>
  <form class="mx-auto p-5" style="width: 1000px" method="post" action="/olhonailha/controllers/tipoAdd.php">
    <div class="mb-3">
      <label for="nome" class="form-label">Tipo da descrição</label>
      <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <textarea rows="4" cols="50" class="form-control" name="descricao" id="descricao"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>