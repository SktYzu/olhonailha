<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';
<<<<<<< HEAD
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';

if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');




try {
  /* $id=$_SESSION['Usuario']['id_usuario']; */
    $denuncias = denuncia::listar();
} catch (PDOException $e) {
    echo $e->getMessage();

}
try {
  $id = $_SESSION['usuario']['id_usuario'];

  $usuario = new usuario($id);

  $denuncias = denuncia::listaruser($id);
} catch (PDOException $e) {
  echo $e->getMessage();
}
try {
  $tipos = TipoDenuncia::listar();
} catch (PDOException $th) {
  echo $th->getMessage();
}
?>

<?php if (isset($_COOKIE['msg'])): ?>
  <?php if ($_COOKIE['tipo'] === 'sucesso'): ?>
    <div class="alert alert-success text-center m-3" role="alert">
      <?= $_COOKIE['msg'] ?>
    </div>
  <?php elseif ($_COOKIE['tipo'] === 'perigo'): ?>
    <div class="alert alert-danger text-center m-3" role="alert">
      <?= $_COOKIE['msg'] ?>
    </div>
  <?php else: ?>
    <div class="alert alert-info text-center m-3" role="alert">
      <?= $_COOKIE['msg'] ?>
    </div>
  <?php endif; ?>
<?php endif; ?>

<style>
  .tabela-responsiva{
    overflow-x: auto;
  }
</style>
>>>>>>> a5f5a3ff94274bb4d99ce35f2e04ffdefce57938

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
                <p class="text-muted mb-0">
                  <?= $usuario->nome ?>
                </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">
                  <?= $usuario->email ?>
                </p>
              </div>
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
  <section class="m-lg">
    <h2 style="text-align: center;">Denúncias</h2>
    <div class="tabela-responsiva">
    <div class="mx-left py-5">
      <table class="table table-striped table table-bordered text-center">
        <tr>
          <th>Tipo</th>
          <th>Título</th>
          <th>Descrição</th>
          <th>Local</th>
          <th>Imagem</th>
  
          <th colspan="2">
            <a href="/olhonailha/views/denuncia.php" class="btn btn-outline-success">Add</a>
          </th>
        </tr>
        <?php foreach ($denuncias as $d) : ?>
        <tr>
          <td><?=$d['id_tipo']?></td>
          <td><?=$d['titulo']?></td>
          <td><?=$d['descricao']?></td>
          <td><?=$d['local_denuncia']?></td>
          <td><img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="" width="300px" height="200px"></td>
          <td>
            <a href="" class="btn btn-outline-primary">Editar</a>
          </td>
          <td>
            <a href="/olhonailha/controllers\denuDelet.php?id=<?= $d['id_denuncia'] ?>" class="btn btn-outline-danger">Remover</a>
          </td>
        </tr>
        <?php endforeach ?>
      </table>
    </div>
        </div>
  
  </section>

<section class="m-lg">
  <h2 style="text-align: center;">Categorias Denúncia</h2>

  <div class="tabela-responsiva">
    <div class="mx-auto py-5 pr-5">
      <table class="table table-striped table table-bordered text-center">
        <tr>
          <th>Tipo de Denuncia</th>
          <th>Descrição</th>
          <th colspan="2">
            <a href="adicionar_categoria.php" class="btn btn-outline-success">Add</a>
          </th>
        </tr>
        <?php foreach ($tipos as $t) : ?>
        <tr>
          <td><?= $t['nome']?></td>
          <td><?= $t['descricao']?></td>
          <td>
            <a href="/olhonailha/views/editar_categoria.php?id=<?=$t['id_tipo']?>" class="btn btn-outline-primary">Editar</a>
          </td>
          <td>
            <a href="/olhonailha/controllers\tipoDelet.php?id=<?= $t['id_tipo'] ?>" class="btn btn-outline-danger">Remover</a>
          </td>
        </tr>
        <?php endforeach ?>
      </table>
    </div>
>>>>>>> a5f5a3ff94274bb4d99ce35f2e04ffdefce57938
  </div>
</section>

<?php if ($_SESSION['usuario']['nivel_acesso'] > 1): ?>
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

<<<<<<< HEAD
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
=======
<section class="m-lg">
  <h2 style="text-align: center;">Faqs</h2>
  <div class="tabela-responsiva">
    <div class="mx-left py-5">
      <table class="table table-striped table table-bordered text-center">
        <tr>
          <th>id_faq</th>
          <th>perg_faq</th>
          <th>resp_faq</th>
          <th colspan="2">
            <a href="" class="btn btn-outline-success">Add</a>
>>>>>>> a5f5a3ff94274bb4d99ce35f2e04ffdefce57938
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
<<<<<<< HEAD
            <a href="" class="btn btn-outline-danger">Remover</a>
=======
            <a href="" class="btn btn-outline-danger">Excluir</a>
>>>>>>> a5f5a3ff94274bb4d99ce35f2e04ffdefce57938
          </td>
        </tr>
      </table>
    </div>
<<<<<<< HEAD
  </section>
<?php endif ?>
</section>
=======
  </div>
</section>

>>>>>>> a5f5a3ff94274bb4d99ce35f2e04ffdefce57938


<footer style="text-align: center; padding: 1rem; margin-bottom: 5px; background-color: rgba(0, 195, 255, 0.89);">Todos
  os direitos reservados &copy;</footer>

</body>

</html>