
<h2>Modifier compte</h2>
<p>Remplissez tous les champs pour modifier votre compte</p>

<div class="section">
<form  action = "." method = "post">
    <input type="hidden" name="action" value="modifier">
    <p>Pseudo :</p>
    <input type = "text" name="user">
    <p>Email :</p>
    <input type = "email" name="email">
    <p>Mot de passe :</p>
    <input type = "password" name="mdp">
    <br>
    <input class="button" type = "submit" value = "modifier">
</form>
</div>
<?php
//var_dump($_SESSION);
//echo "<br>";
//var_dump($_SESSION['id'][0]);

