<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/newsletter.css">
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
    <section class="section-un">
        <h1 style="font-size: 50px;">Newsletter</h1>
        <h2 style="font-size: 31px; margin-top: -47px;">Créer une nouvelle</h2>
        <div class="form-un">
            <img src="images/picture.png" alt="Icon paysage" style="position: absolute; z-index: 2; margin-left: -26px; margin-top: 52px;">
            <h3 style="margin-top: 120px; position: absolute; z-index: 2; margin-left:13px;">Insérer une image</h3>
        </div>
        <div class="form-deux">
            <img src="images/miseforme.png" alt="Icon de mise en forme" style="position: absolute; margin-top: 60px; margin-left: -10px; width: 40px; height: 40px;">
            <h3 style="margin-top: 118px; position: absolute; z-index:2; margin-left: 27px;">Mise en forme</h3>
        </div>
    </section>
    <!--Section deux-->
    <section class="section-deux">
        <h2 style=" position: absolute; z-index: 2; margin-top: -500px; font-size: 30px;">Voir les anciennes</h2>
        <p id="p-debut">Date de début</p><input type="date" name="Date" id="Debut" style="height: 39px; width: 189px; margin-top: -331px; margin-left: 619px; position: absolute; z-index: 2; border-radius: 13px; padding-left: 20px; padding-right: 9px; font-size: 12px;">
       <p id="p-fin">Date de fin</p> <input type="date" name="Date" id="Fin" style="height: 39px; width: 189px; margin-top: -331px; margin-left: 967px; position: absolute; z-index: 2; border-radius: 13px; padding-left: 20px; padding-right: 9px; font-size: 12px;">
       <button type="submit" name="nom_champ" id="butn-un">Filtrer</button>
        <button type="submit" name="submit" id="valide">Valider</button>
        <button type="reset" name="reset" id="reset">Effacer</button>
        <input type="search" name="search" id="search" placeholder="Rechercher" style="height: 39px; width: 189px; margin-top: -227px; margin-left: 1174px; margin-bottom: 50px; border-radius: 13px; padding-left: 20px; font-size: 12px; position: absolute; z-index: 2;">
        <img src="images/newletter-un.png" alt="Newletter un" id="new-un">
        <img src="images/newletter-deux.png" alt="Newsletter deux" id="new-deux">
        <img src="images/newletter-trois.png" alt="Newsletter trois" id="new-trois">
        <img src="images/newletter-quatre.png" alt="Newsletter quatre" id="new-quatre">
    </section>
    <!--Section trois-->
    <section class="section-trois">
        <h2>Administrateur</h2>
        <table cellspacing="30" cellpading="60" style="margin-top: 55px;">
            <tr align="left">
                <td><img src="images/home.png" alt="Accueil"></td>
                <th><a href="#">Accueil</a></th>
            </tr>
            <tr align="left">
                <td><img src="images/contact.png" alt="Contact"></td>
                <th><a href="admin.php">Contact</a></th>
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