<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';
?>

<div class="login-card">
    <div class="card-header">
        <div class="log">Cadastro</div>
    </div>
    <form action="/" method="post">
        <div class="form-group">
            <label for="username">Nome</label>
            <input name="nome" id="username" type="text" required>
        </div>
        <div class="form-group">
            <label for="username">E-mail:</label>
            <input name="email" id="username" type="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input name="senha" id="password" type="password" required>
        </div>
        <div class="form-group">
            <input value="Cadastro" type="submit">
        </div>
    </form>
</div>