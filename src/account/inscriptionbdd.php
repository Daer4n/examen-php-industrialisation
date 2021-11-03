<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=indust_php;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $req = $bdd->prepare('SELECT mail FROM compte WHERE mail = :mail');
    $req->execute(array('mail' => $_POST['mail']));

    if ($req->fetch() != null) {
        $req->closeCursor();
        header('Location: ./inscription.php');
    }
    else {
		$req->closeCursor();
        $req2 = $bdd->prepare('INSERT INTO compte(mail, mdp) VALUES (:mail, :mdp)');
        $req2->execute(array('mail' => $_POST['mail'], 'mdp' => $_POST['mdp']));
		$req2->closeCursor();
        header('Location: '.$_SERVER['DOCUMENT_ROOT'].'/index.php');
    }
?>