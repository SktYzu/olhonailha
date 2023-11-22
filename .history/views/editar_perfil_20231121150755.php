<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/models/usuario.php';
if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
}
try {
  $id = $_SESSION['usuario']['id_usuario'];

  $usuario = new usuario($id);
} catch (PDOException $th) {
  echo $th->getMessage();
}

?>

<section style="margin: 1rem;">
  <legend style="text-align: center;">
    <h2>Editar perfil</h2>
  </legend>
  <form class="mx-auto p-5" style="width: 50vw" action="/olhonailha/controllers/edit_controller.php" method="post" >
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" value=" <?= $usuario->nome ?>">

    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value=" <?= $usuario->email?>">

    </div>
    <!-- <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" name="senha" id="senha">
    </div> -->
    <button type="submit" class="btn btn-primary">Editar</button><br>
    <div class="mt-3"><a href="" class="btn btn-outline-danger">Excluir Perfil</a></div>
  </form>
</section>
<footer style="text-align: center; padding: 1rem; margin-top: 140px; background-color: rgba(0, 195, 255, 0.89);">Todos
  os direitos reservados &copy;</footer>

</body>

</html>