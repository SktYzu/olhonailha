<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/tipo_denuncia.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/faq.php';

if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
  exit();
}
try {
  $faqs = Faq::listar();
} catch (PDOException $e) {
  echo $e->getMessage();
}

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

<?php if (isset($_COOKIE['msg'])) : ?>
  <?php if ($_COOKIE['tipo'] === 'sucesso') : ?>
    <div class="alert alert-success text-center m-3" role="alert">
      <?= $_COOKIE['msg'] ?>
    </div>
  <?php elseif ($_COOKIE['tipo'] === 'perigo') : ?>
    <div class="alert alert-danger text-center m-3" role="alert">
      <?= $_COOKIE['msg'] ?>
    </div>
  <?php else : ?>
    <div class="alert alert-info text-center m-3" role="alert">
      <?= $_COOKIE['msg'] ?>
    </div>
  <?php endif; ?>
<?php endif; ?>

<style>
  .M {
    border-radius: 60px;
    /*display: flex;*/
    /*flex-direction: column;*/
    /*align-items: flex-end;*/
    /*justify-content: space-evenly;*/
    text-align: center;
    background-color: rgb(192, 185, 185);
    width: 500px;
    height: 250px;
    margin: 2rem auto;
    padding: 10px;
  }

  .t,
  th,
  td {
    border: 1px solid black;
    background-color: rgb(192, 185, 185);
    padding: 10px;
    margin: 2rem auto;

  }

  .th {
    background-color: rgb(8, 73, 194);
  }

  .desc {
    display: flex;
    width: 100%;
    height: 200px;
    scroll-snap-type: y mandatory;
    overflow: auto;

  }

  .tabela-responsiva {
    overflow-x: auto;
  }
</style>

<section>

  <div class="M">
    <div>
      <!--<img src="imgs\logo.png" alt="logo" width="250px">-->
    </div>
    <div>
      <h3>Nome</h3>
      <p><?= $usuario->nome ?></p>
      <!--</div>
            <div>-->
      <h3>Email</h3>
      <p><?= $usuario->email ?></p>
      <div>
        <a href="\olhonailha\views\editar_perfil.php" class="btn btn-primary">Editar</a>
      </div>
    </div>

  </div>
</section>
<section>
  <h1 style="text-align: center; background-color:white;">Minhas denúncias</h1>
  <div class="tabela-responsiva">
    <table class="t">

      <tr class=>
        <th class="th">Tipo</th>
        <th class="th">Título</th>
        <th class="th">Descrição</th>
        <th class="th">Local</th>
        <th class="th">Imagem</th>

        <th colspan="2">
          <a href="/olhonailha/views/denuncia.php" class="btn btn-outline-success">Adicionar</a>
        </th>
      </tr>
      <?php foreach ($denuncias as $d) : ?>
        <?php $id = $d['id_tipo'];
        $tipo = new TipoDenuncia($id);
        ?>
        <tr>
          <td class="td"> <?= $tipo->id_tipo . "-" . $tipo->nome ?></td>
          <td><?= $d['titulo'] ?></td>
          <td class="desc"><?= $d['descricao'] ?></td>
          <td><?= $d['local_denuncia'] ?></td>
          <td><img src="data:image;charset=utf8;base64,<?= base64_encode($d['foto_denuncia']) ?>" alt="" width="200px" height="100px"></td>
          <td>
            <a href="/olhonailha/views/denunciaEdit.php?id=<?= $d['id_denuncia'] ?>" class="btn btn-outline-primary">Editar</a>
          </td>
          <td>
            <a href="/olhonailha/controllers\denuDelet.php?id=<?= $d['id_denuncia'] ?>" class="btn btn-outline-danger">Remover</a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</section>

<?php if ($nivel >= 2) : ?>
  <section>
    <h1 style="text-align: center; background-color:white;">Categorias Denúncia</h1>
    <div class="">
      <table class="t">

        <tr class=>
          <th class="th">Tipo de denúncia</th>
          <th class="th">Descrição</th>

          <th colspan="2">
            <a href="adicionar_categoria.php" class="btn btn-outline-success">Adicionar</a>
          </th>
        </tr>
        <?php foreach ($tipos as $t) : ?>
          <tr>
            <td class="td"><?= $t['nome'] ?></td>
            <td><?= $t['descricao'] ?></td>

            <td>
              <a href="/olhonailha/views/editar_categoria.php?id=<?= $t['id_tipo'] ?>" class="btn btn-outline-primary">Editar</a>
            </td>
            <td>
              <a href="/olhonailha/controllers\tipoDelet.php?id=<?= $t['id_tipo'] ?>" class="btn btn-outline-danger">Remover</a>
            </td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  </section>

  <section>
    <h1 style="text-align: center; background-color:white;">Faq</h1>
    <div class="">
      <table class="t">

        <tr class=>
          <th class="th">id_faq</th>
          <th class="th">Pergunta_faq</th>
          <th class="th">Resposta_faq</th>

          <th colspan="2">
            <a href="/olhonailha/views/admin/faq_criar.php" class="btn btn-outline-success" class="btn btn-outline-success">Adicionar</a>
          </th>
        </tr>
        <?php foreach ($faqs as $f) : ?>
          <tr>
            <td class="td"><?= $f['id_faq'] ?></td>
            <td><?= $f['pergunta_faq'] ?></td>
            <td><?= $f['resposta_faq'] ?></td>

            <td>
              <a href="/olhonailha/views/admin/faq_editar.php?id=<?= $f['id_faq'] ?>" class="btn btn-outline-primary">Editar</a>
            </td>
            <td>
              <a href="/olhonailha/controllers/faq_delete_controller.php?id=<?= $f['id_faq'] ?>" class="btn btn-outline-danger">Remover</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </section>
  <a href="/olhonailha/views/admin/controlDenu.php" class="btn btn-primary m-3">Gerenciar Denuncias</a>
<?php endif ?>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>