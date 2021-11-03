<?php
	session_start();

	$email=addslashes($_POST['email']);
	$mdp=addslashes($_POST['mdp']);

	try {
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=indust_php;charset=utf8', 'root', '');
	} catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('SELECT `mail` FROM compte WHERE mail="'.$email.'"');
	$req->execute();
	$resmail = $req->fetch()[0];
	$req->closeCursor();

	$req = $bdd->prepare('SELECT `password` FROM compte WHERE mail = "'.$email.'"');
	$req->execute();
	$resmdp = $req->fetch()[0];
	$req->closeCursor();
	
	if ($email == $resmail && password_verify($mdp, $resmdp)){
			$_SESSION["email"] = $resmail;
			header('Location: ../index.php');
	} else {
			header('Location: ../index.php');
	}