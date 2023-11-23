<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
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

<div class="login-card">
    <div class="card-header">
        <div class="log">Login</div>
    </div>
    <form action="/olhonailha/controllers/login_controller.php" method="post">
        <div class="form-group">
            <label for="username">E-mail:</label>
            <input name="email" id="username" type="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input name="senha" id="password" type="password">
        </div>
        <div class="form-group">
            <input value="Login" type="submit">
        </div>
        <p>Se não tiver conta, <a href="cadastro.php">Cadastre-se</a></p>
    </form>
</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>