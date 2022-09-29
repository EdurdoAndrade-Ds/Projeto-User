<h2>Login</h2>

<form method="post">
    <input type="text" name="login" placeholder="Seu usuario." value="root">
    <input type="password" name="senha" placeholder="Sua senha.">
    <button type="submit" name="acao">Logar</button>
</form>
<!-- <form action="/login/store" method="post">
    <input type="text" name="email" placeholder="Seu email." value="teste@teste.com">
    <input type="password" name="password" placeholder="Sua senha." value="123">
    <button type="submit">Logar</button>
</form> -->

<br>

<?php echo flash('login'); ?>
