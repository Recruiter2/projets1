<body>
<div id="container">
<fieldset>
    <legend><h2>Modifier compte</h2></legend>
<label>Veuillez saisir tous les champs</label>

<form action = "." method = "post">
    <input type="hidden" name="action" value="modifier" class="cnx-control">
    <label>Pseudo :</label>
    <input type = "text" name="user" class="cnx-control">
    <label>Email :</label>
    <input type = "email" name="email" class="cnx-control">
    <label>Mot de passe :</label>
    <input type = "password" name="mdp" class="cnx-control">
    <br>
    <input type = "submit" value = "modifier" class="cnx-sub">
</form>
</fieldset>
</div>