<?php include($_SERVER['DOCUMENT_ROOT'].'/shared/header.php');?>

<form action="./inscriptionbdd.php" method="POST">
	<div class="field">
		<p>
			<label class="label">Adresse mail :</label>
			<input class="input" type="email" name="mail" placeholder="Entrez votre email" required>
		</p>
	</div>

	<div class="field">
		<p>
			<label class="label">Mot de passe :</label>
			<input class="input" type="password" name="mdp" placeholder="Entrez votre mot de passe" required>
		</p>
	</div>

	<div class="field">
		<p>
			<label class="label">Mot de passe(Confirmation) :</label>
			<input class="input" type="password" name="mdpc" placeholder="Entrez votre mot de passe" required>
		</p>
	</div>

	<div class="field">
		<input type="submit" id='bouton' name="bouton" class="button is-primary" style="margin-top: 10px" value="M'inscrire" />
	</div>
</form>
<?php include($_SERVER['DOCUMENT_ROOT'].'/shared/footer.php'); ?>