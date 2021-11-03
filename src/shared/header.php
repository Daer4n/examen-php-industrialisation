<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mon site examen industrialisation</title>
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<header>
			<a href="/index.php"><img src="/images/profile.jpg" width="140" height="140"></a>
			<h1>Alexis Couturas</h1>
			<div class="banner">
				<a href="#presentation" class="button-link" >Présentation</a>
				<a href="#formations" class="button-link">Formations</a>
				<a href="#competences" class="button-link">Compétences</a>
				<a href="#cv" class="button-link">CV</a>
				<?php
					isset($_SESSION['email']) 
					? print '<a href="/account/deconnect.php" class="button-link" style="margin-right: 30px;">Deconnexion</a>'
					
					: print '<a href="/account/connect.php" class="button-link">Connexion</a>
							<a href="/account/inscription.php" class="button-link" style="margin-right: 30px;">Inscription</a>';
				?>
			</div>
		</header>