<?php include($_SERVER['DOCUMENT_ROOT'].'/shared/header.php');?>

<form action="./connexionbdd.php" method="POST">
	<div class="field">
		<label class="label">Adresse mail :</label>
		<input class="input" type="email" name="email" placeholder="Entrez votre email" required>
	</div>

	<div class="field">
		<label class="label">Mot de passe :</label>
		<input class="input" type="password" name="mdp" placeholder="Entrez votre mot de passe" required>
	</div>

	<div class="field">
		<input type="submit" id='bouton' name="bouton" class="button submit" value="Se connecter" />
	</div>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'].'/shared/footer.php'); ?>