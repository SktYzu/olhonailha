<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
  exit();
}
?>


<section style="margin: 1rem;">
  <legend style="text-align: center;">
    <h2>Editar Denúncia</h2>
  </legend>
  <form class="mx-auto p-5" style="width: 1000px">
    <div class="mb-3">
      <select class="form-select" name="id_tipo" id="id_tipo" aria-label="Default select example">
        <option selected>Tipo de Denúncia</option>
        <option value="1">1</option>
        <option value="2">2</option>

      </select>
    </div>
    <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <textarea rows="4" cols="50" class="form-control" name="descricao" id="descricao" form="usrform"></textarea>

    </div>
    <div class="mb-3">
      <label for="local" class="form-label">Local</label>
      <input type="Text" class="form-control" name="local" id="local">
    </div>
    <div class="mb-3">
      <label for="foto_denuncia" class="form-label">Imagem</label>
      <input type="file" class="form-control" name="foto_denuncia" id="foto_denuncia">


    </div>


    <button type="submit" class="btn btn-primary">Editar</button>
  </form>



</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>