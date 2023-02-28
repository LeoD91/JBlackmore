<?php
//Partie formulaire dans A propos//
$mysqli = new Mysqli("localhost", "root", "", "jupiter");
if($_POST)
{
$result = $mysqli->query("INSERT INTO contact (nom, prenom, mail, telephone, message) VALUES ('$_POST[Name]',
'$_POST[Prenom]', '$_POST[Mail]', '$_POST[Phone]', '$_POST[Message]')");
echo '<div style="background: green; padding: 5px;">le contact a bien été ajouté</div>';
}






// echo $_GET( )
// $Name= '';
// $Prenom='';
// $Mail='';
// $Phone='';
// $Message='';
// var_dump($_POST);
//  if(!empty($_POST)){
//      echo 'Recuperation des données de saisies : <br>';
//      echo 'Name : ' .$_POST['Name'] . '<br>';
//     echo 'Prenom : ' .$_POST['Prenom'] . '<br>';
//      echo 'Mail : ' .$_POST['Mail'] . '<br>';
//      echo 'Phone : ' .$_POST['Phone'] . '<br>';
//     echo 'Message : ' .$_POST['Message'] . '<br>';
//     echo '<pre>'; print_r($_POST); echo '</pre>';

//     $f= fopen("sauvegarde.txt","a");
//     fwrite($f, $_POST['Name'] ."-");
//     fwrite($f, $_POST['Prenom'] ."-");
//     fwrite($f, $_POST['Mail'] ."-");
//     fwrite($f, $_POST['Phone'] ."-");
//     fwrite($f, $_POST['Message'] ."-");
//     $f= fclose($f);
//  }
