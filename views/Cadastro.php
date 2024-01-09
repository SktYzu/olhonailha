<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
?>

<div class="login-card">
    <div class="card-header">
        <div class="log">Cadastro</div>
    </div>
    <form action="/olhonailha/controllers/add_controller.php" method="post">
        <div class="form-group">
            <label for="username">Nome</label>
            <input name="nome" id="username" type="text" required>
        </div>
        <div class="form-group">
            <label for="username">E-mail:</label>
            <input name="email" id="email" type="email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input name="senha" id="senha" type="password" required>
        </div>
        <div class="form-group">
            <label for="password">Confirme sua Senha:</label>
            <input name="senha" id="password" type="password" oninput="Vsenha()" required>
        </div>
        <div>
            <span id="span" style="color:black">
                * Sua senha deve conter mais que 8 caracteres.
            </span>
            <br>
            <span id="span2" style="color:black">
                * Sua senha deve coincidir
            </span>
        </div>
        <div class="form-group">
            <input value="Cadastro" type="submit" id="buttonc" disabled >
        </div>
    </form>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_footer.php';
?>