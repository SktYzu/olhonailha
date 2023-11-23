<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';
try {
  $id = $_SESSION['usuario']['id_usuario'];

  $usuario = new usuario($id);

  $denuncias = denuncia::listar();
} catch (PDOException $e) {
  echo $e->getMessage();
}
try {
  $tipos = TipoDenuncia::listar();
} catch (PDOException $th) {
  echo $th->getMessage();
}
?>

<section style="background-color: #eee; margin: 1rem">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8 container center">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $usuario->nome ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $usuario->email ?></p>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="d-flex justify-content-center mb-2">



    <a href="\olhonailha\views\editar_perfil.php" class="btn btn-primary">Editar</a>
  </div>
  </div>
</section>
<section style="margin: 1rem auto;">
  <h2 style="text-align: center;">Denúncias</h2>
  <div class="mx-auto p-5" style="width: 1000px;">
    <table class="table table-striped table table-bordered text-center">
      <tr>
        <th>Tipo</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Local</th>
        <th>Imagem</th>

        <th colspan="2">
          <a href="/olhonailha/views/denuncia.php" class="btn btn-outline-success">Adicionar</a>
        </th>
      </tr>
      <?php foreach ($denuncias as $d): ?>
        <tr>
          <td>
            <?= $d['id_tipo'] ?>
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
          <td><img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="" width="300px"
              height="200px"></td>
          <td>
            <a href="" class="btn btn-outline-primary">Editar</a>
          </td>
          <td>
            <a href="/olhonailha/controllers\denuDelet.php?id=<?= $d['id_denuncia'] ?>"
              class="btn btn-outline-danger">Remover</a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>


</section>
<section style="margin: 1rem auto;">
  <h2 style="text-align: center;">Categorias Denúncia</h2>
  <div class="mx-auto p-5" style="width: 1000px;">
    <table class="table table-striped table table-bordered text-center">
      <tr>


        <th>Tipo de Denuncia</th>
        <th>Descrição</th>

        <th colspan="2">
          <a href="adicionar_categoria.php" class="btn btn-outline-success">Adicionar</a>
        </th>
      </tr>
      <?php foreach ($tipos as $t): ?>
        <tr>
          <td>
            <?= $t['nome'] ?>
          </td>
          <td>
            <?= $t['descricao'] ?>
          </td>
          <td>
            <a href="/olhonailha/views/editar_categoria.php?id=<?= $t['id_tipo'] ?>"
              class="btn btn-outline-primary">Editar</a>
          </td>
          <td>
            <a href="/olhonailha/controllers\tipoDelet.php?id=<?= $t['id_tipo'] ?>"
              class="btn btn-outline-danger">Remover</a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</section>





<section style="margin: 1rem auto;">
  <h2 style="text-align: center;">Faqs</h2>
  <div class="mx-auto p-5" style="width: 1000px;">
    <table class="table table-striped table table-bordered text-center">
      <tr>
        <th>id_faq</th>
        <th>pergunta_faq</th>
        <th>resposta_faq</th>

        <th colspan="2">
          <a href="" class="btn btn-outline-success">Adicionar</a>
        </th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <a href="" class="btn btn-outline-primary">Editar</a>
        </td>
        <td>
          <a href="" class="btn btn-outline-danger">Remover</a>
        </td>
      </tr>
    </table>
  </div>
</section>
</section>


<footer style="text-align: center; padding: 1rem; margin-bottom: 5px; background-color: rgba(0, 195, 255, 0.89);">Todos
  os direitos reservados &copy;</footer>

</body>

</html>