<?php

// Partie formulaire dans Inscription//
$mysqli = new Mysqli("localhost", "root", "", "jupiter");
if($_POST)
{
$result = $mysqli->query("INSERT INTO membre (nom, prenom, mail, telephone, statut, mdp) VALUES ('$_POST[Name]',
'$_POST[Prenom]', '$_POST[Mail]', '$_POST[Phone]', '$_POST[mdp]')");
echo '<div style="background: green; padding: 5px;">Vous vous êtes bien inscrit</div>';
}