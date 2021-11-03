<?php
	session_start();

	$email=addslashes($_GET['email']);
	$mdp=addslashes($_GET['mdp']);

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=indust_php;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('SELECT mail, type_utilisateur FROM compte WHERE mail="'.$email.'"');
	$req->execute();
	$resmail = $req->fetch();
	$req->closeCursor();

	$req = $bdd->prepare('SELECT mdp FROM compte WHERE mail = "'.$email.'"');
	$req->execute();
	$resmdp = $req->fetch();
	$req->closeCursor();
				
	if ($email == $resmail[0] && $mdp == $resmdp[0]){
			$_SESSION["email"]=$resmail[0];
			var_dump($resmail[1]);exit;
			$_SESSION["statut"]=$resmail[1];
			header('Location: '.$_SERVER['DOCUMENT_ROOT'].'/index.php');
	}
	else {
			header('Location: '.$_SERVER['DOCUMENT_ROOT'].'/index.php');
	}
?>
