<fieldset>
    <legend><h2>Connectez vous</h2></legend>
<form action = "index.php" method = "post">
    <input type="hidden" name="action" value="connexion">
    <label for="idpseudocnx">Pseudo :</label>
    <input type = "text" id="idpseudocnx" class="cnx-control" name="pseudo" placeholder="entrer votre pseudo...">
    <br>
    <label for="idpasscnx">Mot de passe :</label>
    <input type = "password" class="cnx-control" name="mdp" id="idpasscnx" placeholder="entrer votre mot de passe...">
<br>
    <input type = "submit" class="cnx-sub" value = "connexion">
</form>
</fieldset>
<a class="btn-inscription" href="?page=inscription" role="button">creer un compte</a>

