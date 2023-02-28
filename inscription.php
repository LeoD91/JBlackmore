<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscription.css">
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
                    <li><a href="connexion.html" ><img src="images/profil2.svg" alt="Profil"></a> </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--Section-->
    <section>
        <div>
            <h2>Inscription</h2>
            <form action="formulaire-inscription.php" method="post">
                <fieldset>
                    <table cellspacing="5">
                        <tr align="left">
                            <th id="titre-nom">Nom*</th>
                            <td><input type="text" name="Name" size="20" maxlength="20" placeholder="Nom" id="nom" id="Name"></td>
                        </tr>
                        <tr align="left">
                            <th id="titre-prenom">Prénom*</th>
                            <td><input type="text" name="Prenom" size="20" maxlength="20" placeholder="Prénom" id="prenom" id="Prenom"></td>
                        </tr>
                        <tr align="left">
                            <th id="titre-mail">Email*</th>
                            <td><input type="text" name="Mail" size="20" maxlength="50" placeholder="Email" id="email" id="Mail"></td>
                        </tr>
                        <tr align="left">
                            <th id="titre-phone">Téléphone*</th>
                            <td><input type="text" name="Phone" size="20" maxlength="20" placeholder="Téléphone" id="telephone" id="Phone"></td>
                        </tr>
                        <tr align="left">
                            <th id="titre-mp">Mot de passe*</th>
                            <td><input type="text" name="mdp" size="20" maxlength="20" placeholder="Mot de passe" id="mdp"></td>
                        </tr>
                        <!-- <tr align="left">
                            <th id="titre-mp-deux">Confirmation mot de passe*</th>
                            <td><input type="text" name="motdepasse" size="20" maxlength="20" placeholder="Confirmer votre mot de passe" id="mp-deux" id="mdp"></td>
                        </tr> -->
                        <tr align="left">
                            <td><button type="submit" name="nom_champ" id="butn-deux" style="margin-top: 38px; margin-left: 135px;">S'inscrire</button></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
            
        </div>
        <div class="center">
            <h1 id="captchaHeading">Etes-vous un robot ?</h1>
            <div id="captchaBackground">
                <span id="captcha">captcha text</span>
                <input id="textBox" type="text" name="text">
                <div id="buttons">
                    <input id="submitButton" type="submit">
                    <button id="refreshButton" type="submit">Refresh</button>
                </div>
            <span id="output"></span>
                </div>
            </div>
    </section>
    <!--Footer-->
    <footer>
        <br>
        <br>
        <table align="center" width="55%" cellspacing="16" cellpading="18">
            <tr>
                <th align="left">Jupiter Blackmore</th>
                <th align="left">Ressources</th>
                <th align="left">Contact</th>
            </tr>
            <tr>
                <td align="left">A propos</td>
                <td align="left">Mentions légales</td>
                <td align="left">Mail</td>
            </tr>
            <tr>
                <td align="left"></td>
                <td align="left">Conditions d'utilisations</td>
                <td align="left">Adresse</td>
            </tr>
            <tr>
                <td align="left"></td>
                <td align="left">Politiques de confidentialité</td>
                <td align="left">Réseaux sociaux</td>
            </tr>
            <tr>
                <td align="left"></td>
                <td align="left">FAQ</td>
                <td align="left"></td>
            </tr>
            <tr>
                <td align="left"></td>
                <td align="left">Cookies</td>
                <td align="left"></td>
            </tr>
        </table>
        <div class="footer-un">
            <ul>
                <li><h2>Jupiter Blackmore</h2></li>
                <li id="inscription"> S'inscrire à ta newsletter</li>
                <li>
                    <input type="email" id="email" placeholder="Entrer votre mail">
                    <button class="btn">S'inscrire</button>
                </li>
            </ul>
        </div>
        <div class="footer-deux">
            <p>Copyright ©Jupiter-Blackmore2023 </p>
            <img src="images/Facebook.png" alt="facebook" id="facebook"><img src="images/Twitter.png" alt="Twitter" id="twitter"><img src="images/Instagram.png" alt="Instagram" id="instagram"><img src="images/LinkedIn.png" alt="Linkedin" id="linkedin">
        </div>
     </footer>
    <script src="js/app.js"></script>
</body>
</html>