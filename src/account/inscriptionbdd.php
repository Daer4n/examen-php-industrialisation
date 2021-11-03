<?php

	$email=addslashes($_POST['email']);
	$mdp=password_hash(addslashes($_POST['mdp']), PASSWORD_DEFAULT);
	try {
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=indust_php;charset=utf8', 'root', '');
	} catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('SELECT `mail` FROM compte WHERE mail="'.$email.'"');
	$req->execute();
	$resmail = $req->fetch()[0];
	$req->closeCursor();

	if ($resmail != null) {
		header('Location: ./inscription.php');
	} else {
		$req = $bdd->prepare('INSERT INTO compte VALUES ("'.$email.'", "'.$mdp.'")');
		$req->execute();
		$req->closeCursor();
		header('Location: ../index.php');
	}