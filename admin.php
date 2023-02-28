<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Jupiter Blackmore</title>
</head>
<body>
     <!--Header-->
     <header class="header">
        <nav>
            <img src="images/logo.png" alt="Logo du site">
            <div id="container">
                <ul class="navbar">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="index.html">Actualité</a></li>
                    <li><a href="livres.html">Livres</a></li>
                    <li><a href="bio.html">A propos</a></li>
                    <li><a href="connexion.html"><img src="images/profil2.svg" alt="Profil"></a> </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--Section un-->
    <section class="section-un" style="height: 1176px;">
        <h1 style="font-size: 50px;">Contact</h1>
        <h2 id="titre-un" style="margin-left: 371px; color: white; font-size: 30px; margin-top: 50px;">Messages</h2>
        <p id="p-debut" style="margin-left: 685px;">Date de début</p><input type="date" name="Date" id="Debut" style="height: 39px; width: 189px; margin-top: 56px; margin-left: 803px; position: absolute; z-index: 2; border-radius: 13px; padding-left: 20px; padding-right: 9px; font-size: 12px;">
       <p id="p-fin" style="margin-left: 1072px;">Date de fin</p> <input type="date" name="Date" id="Fin" style="height: 39px; width: 189px; margin-top: 56px; margin-left: 1170px; position: absolute; z-index: 2; border-radius: 13px; padding-left: 20px; padding-right: 9px; font-size: 12px;">
        <button type="submit" name="nom_champ" id="butn-un">Filtrer</button>
        <button type="submit" name="submit" id="valide" style="margin-left: 1387px;">Valider</button>
        <input type="search" name="search" id="search" placeholder="Rechercher" style="height: 39px; width: 189px; margin-top: 175px; margin-left: 1174px; margin-bottom: 50px; border-radius: 13px; padding-left: 20px; font-size: 12px;">
        <!-- <table border="3" cellspacing="20" cellpading="50" id="table-un">
            <tr align="center">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Mail</th>
                <th>Téléphone</th>
                <th>Date de création</th>
                <th>Message</th>
                <th>Supprimer</th>
            </tr>
            <tr align="center">
                <td>NICKLES</td>
                <td>Léo</td>
                <td>neiphilin91@outlook.fr</td>
                <td>06.60.60.60.60</td>
                <td>16/02/2023</td>
                <td><img src="images/message.png" alt="Message" style="width: 25px; height: 25px; padding: 4px;"></td>
                <td><img src="images/delete.png" alt="Supprimer" style="width: 25px; height: 25px; padding: 4px;"></td>
            </tr>
        </table> -->
        <?php
        $mysqli = new Mysqli("localhost", "root", "", "jupiter");
        $resultat = $mysqli->query("SELECT * FROM contact");
        echo '<table border="3" cellspacing="20" cellpading="50" id="table-un"><tr>';
        while($colonne = $resultat->fetch_field()){
            echo '<th>' . $colonne->name . '</th>';
        }
        echo "</tr>";
        while ($ligne = $resultat->fetch_assoc()){
            echo '<tr class="ligne">';
            foreach ($ligne as $indince => $information){
                echo '<td>' . $information . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
        <!--Partie Utilisateurs-->
        <h2 id="titre-deux" style="margin-left: 377px; color: white; font-size: 30px; margin-top: 84px;">Utilisateurs</h2>
        <p id="p-debut" style="margin-left: 680px;">Date de début</p><input type="date" name="Date" id="Debut-deux" style="height: 39px; width: 189px; margin-top: 58px; margin-left: 800px; position: absolute; z-index: 2; border-radius: 13px; padding-left: 20px; padding-right: 9px; font-size: 12px; background-color: white; color: grey;">
       <p id="p-fin" style="margin-left: 1075px;">Date de fin</p> <input type="date" name="Date" id="Fin-deux" style="height: 39px; width: 189px; margin-top: 58px; margin-left: 1170px; position: absolute; z-index: 2; border-radius: 13px; padding-left: 20px; padding-right: 9px; font-size: 12px; background-color: white; color: grey;">
        <button type="submit" name="nom_champ" id="butn-un">Filtrer</button>
        <button type="submit" name="submit" id="valide" style="margin-left: 1380px;">Valider</button>
        <input type="search" name="search" id="search" placeholder="Rechercher" style="height: 39px; width: 189px; margin-top: 129px; margin-left: 1174px; margin-bottom: 80px; border-radius: 13px; padding-left: 20px; font-size: 12px;">

        <?php
        $mysqli = new Mysqli("localhost", "root", "", "jupiter");
        $resultat = $mysqli->query("SELECT * FROM membre");
        echo '<table border="3" cellspacing="20" cellpading="50" id="table-un" style="margin-top: -50px"><tr>';
        while($colonne = $resultat->fetch_field()){
            echo '<th>' . $colonne->name . '</th>';
        }
        echo "</tr>";
        while ($ligne = $resultat->fetch_assoc()){
            echo '<tr class="ligne">';
            foreach ($ligne as $indince => $information){
                echo '<td>' . $information . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </section>
    <!--Section deux-->
    <section class="section-deux" style="margin-top: -1176px;">
        <h2 style="text-align: left; color: white;">Administrateur</h2>
        <table cellspacing="20" cellpading="50">
            <tr align="left">
                <td><img src="images/home.png" alt="Accueil"></td>
                <th><a href="#">Accueil</a></th>
            </tr>
            <tr align="left">
                <td><img src="images/contact.png" alt="Contact"></td>
                <th><a href="#">Contact</a></th>
            </tr>
            <tr align="left">
                <td><img src="images/newsletter.png" alt="Newsletter"></td>
                <th><a href="newsletter.php">Newsletter</a></th>
            </tr>
            <tr align="left">
                <td><img src="images/document.png" alt="Document"></td>
                <th><a href="#">Messages</a></th>
            </tr>
            <tr align="left">
                <td><img src="images/notif.png" alt="Notifications"></td>
                <th><a href="#">Notifications</a></th>
            </tr>
            <tr align="left">
                <td><img src="images/parametre-blanc.png" alt="Paramètres"></td>
                <th><a href="#">Paramètres</a></th>
            </tr>
        </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>