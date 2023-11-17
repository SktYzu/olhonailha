<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
?>


<section style="margin: 1rem auto">
  <h1 style="text-align: center;">Categorias Denúncia</h1>
  <form class="mx-auto p-5" style="width: 1000px" method="post" action="/olhonailha/controllers">
    <div class="mb-3">
      <label for="nome" class="form-label">Tipo da descrição</label>
      <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <textarea rows="4" cols="50" class="form-control" name="descricao" id="descricao" form="usrform"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
</section>

<footer style="text-align: center; padding: 1rem; margin-top: 320px; background-color: rgba(0, 195, 255, 0.89);">Todos
  os direitos reservados &copy;</footer>
</body>

</html>