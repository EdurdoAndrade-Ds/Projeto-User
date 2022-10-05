<h2>Login Acesso</h2>

<form action="/login/store" method="post"> 
    <link rel="stylesheet" href="/assets/css/styles.css">
    <input type="text" name="login" placeholder="Seu usuario." value="root">
    <input type="password" name="senha" placeholder="Sua senha.">
    <button type="submit" name="acao" class="btn btn-primary">Logar</button>
</form>

<br>

<?php echo flash('login'); ?>
