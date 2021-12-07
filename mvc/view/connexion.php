<h2>Connectez vous</h2>


<form action = "index.php" method = "post">
    <input type="hidden" name="action" class="form-control" value="connexion">
    <p>Pseudo :</p>
    <input type = "text" name="pseudo" class="form-control" required>
    <p>Mot de passe :</p>
    <input type = "password" name="mdp" class="form-control" required>
<br>
    <input type = "submit" value = "connexion">

    <a class="button" href="?page=inscription">creer un compte</a>
</form>

