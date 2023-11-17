<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/denuControl.php';
try {
  $id=$_SESSION['Usuario']['id_usuario'];
    $denuncias = denuncia::listaruser($id);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<section style="background-color: #eee; margin: 1rem">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>

            <li class="breadcrumb-item active" aria-current="page">Meu Perfil </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-8 container center">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telefone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Endereço</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Rua 1, Centro</p>
              </div>
            </div>


          </div>
        </div>

      </div>
    </div>
    <div class="d-flex justify-content-center mb-2">
      <a href="" class="btn btn-primary">Editar</a>


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
          <a href="" class="btn btn-outline-success">Adicionar</a>
        </th>
      </tr>
      <?php foreach ($denuncias as $d) : ?>
      <tr>
        <td><?=$d['titulo']?></td>
        <td><?=$d['titulo']?></td>
        <td><?=$d['titulo']?></td>
        <td></td>
        <td></td>
        <td>
          <a href="" class="btn btn-outline-primary">Editar</a>
        </td>
        <td>
          <a href="" class="btn btn-outline-danger">Remover</a>
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


        <th>Tipo Descrição</th>
        <th>Descrição</th>

        <th colspan="2">
          <a href="" class="btn btn-outline-success">Adicionar</a>
        </th>
      </tr>
      <tr>



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