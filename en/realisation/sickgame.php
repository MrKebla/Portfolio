<?php
    session_start();
    $lang ='en';
    $_SESSION['lang']=$lang;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sick Game - Nevenkebla</title>
        <script src="https://kit.fontawesome.com/a44d991d57.js" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--Les animations de scroll-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&family=Roboto&family=Taviraj:wght@300&display=swap" rel="stylesheet"> <!--La police google font-->
        <link rel="icon" href="../../img/LogoFond.png" type="image/png"/>
        <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>
        <header>
            <div class="langs">
                <a href="../../fr/realisation/sickgame" class="lang">
                    <img src="../../img/france.png" alt="France Flag">
                    <p>Fran&ccedil;ais</p> 
                </a>
                <a href="#" class="lang">
                    <img src="../../img/english.png" alt="United-States Flag">
                    <p>English</p>
                </a>
            </div>
            <nav>
                <div class="logo">
                    <a href="../index"><img src="../../img/Logo.png" alt="Nevenkebla's Logo"></a>
                </div>
                <div class="toggle">
                    <i class="fas fa-bars ouvrir"></i>
                    <i class="fas fa-times fermer"></i>
                </div>
                <ul class="menu">
                    <li><a href="../index" class="menu-lien">Home</a></li>
                    <li><a href="../realisations" class="menu-lien">Accomplishments</a></li>
                </ul> 
            </nav>
        </header>
        <section class="real">
            <div class="container">
                <div class="real-corps"> 
                    <div class="real-corps-block">
                        <img src="../../img/real-sickgame.png" alt="Sick Game Logo">
                    </div>
                    <div class="real-corps-block">
                        <h1>LudoMaker Game Jam — Sick Game</h1>
                        <p> 
                            The Ludomaker Game Jam took place during my professional bachelor's degree in "Video Game Professions". 
                            The goal of this Game Jam was to create a board game in 5 days, 
                            with the theme "The more you have, the worse it gets". 
                            Collaborating with <a href="https://kieran-mignon.com/" target="_blank">Kieran Mignon</a> 
                            and <a href="https://rayanmadouni.wixsite.com/website" target="_blank">Rayan Madouni</a>, 
                            we designed a board game called "Sick Game". The main theme of the game was diseases. 
                            The objective was to have the fewest points at the end of the game by getting rid of your most severe diseases. 
                            The game ended when we reached the number of rounds set at the beginning.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/sickgamecartes.png" alt="Sick Game Cards">
                        <img src="../../img/sickgamecartes2.png" alt="Sick Game Cards 2">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Game material</h1>
                        <p>
                            The game includes a round counter, a token, and game cards. 
                            The cards are divided into four main groups, each with its own color: 
                            Status cards, Disease cards, Medication cards, and Action cards. 
                            Status cards are distributed at the beginning and provide bonuses or penalties throughout the game.
                        </p>
                        <p>
                            Disease cards have a number in the top left corner representing the severity of the disease, 
                            which is used to calculate points at the end of the game. 
                            Some diseases belong to specific families, like Viruses, STDs, and feces-related diseases. 
                            There are also four incurable diseases that impose penalties on players, such as increased drawing, 
                            forced discarding, inability to play, or hidden cards.
                        </p>
                        <p>
                            Medication cards are used at the end of the game to cure a disease. 
                            They can also cure multiple diseases at once if several cards from the same family are held.
                        </p>
                        <p>
                            Action cards can be played at the end of each round to influence the game. 
                            They allow players to make an opponent draw a card, discard certain diseases, or change the direction of play. 
                            Sick Game is a party game, incorporating pop culture references and a touch of dark humor. <br>
                            <span class="sousligne">Software used:</span><br>
                        </p>
                        <div class="outils">
                            <img src="../../img/adobe-indesign.png" alt="Indesign Logo">
                            <img src="../../img/adobe-illustrator.png" alt="Illustrator Logo">
                            <img src="../../img/adobe-photoshop.png" alt="Photoshop Logo">
                            <img src="../../img/figma.png" alt="Figma Logo">
                        </div>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/sickgamephoto.png" alt="Sick Game Picture">
                        <img src="../../img/sickgamephoto2.png" alt="Sick Game Picture 2">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Course of the game</h1>
                        <p>
                            A game starts with the distribution of cards to the players, 
                            followed by setting up the draw pile and the round counter card on the playing area. 
                            Each player must place a face-up incurable disease card in front of them if they have one.
                        </p>
                        <p>
                            Next, Status cards are distributed and placed face-up in front of each player. 
                            The first player is chosen based on who was sick most recently.
                        </p>
                        <p>
                            To win the game, a player must have the fewest points at the end. Each round begins with players drawing a card. 
                            They can then choose to play an Action card, discard a card (except an incurable disease card) and draw two new cards, 
                            or transfer a random card to the next player (including a disease). 
                            The cards are placed face-down, and the next player picks one to keep. 
                            Once each player has completed their actions, the token is moved on the round counter card, and the next round begins. 
                            The game ends after six rounds, but more can be played if desired. The player with the fewest points wins.
                        </p>
                        <p>
                            At the end, players reveal their cards and tally the points shown on their disease cards, 
                            considering their Status and Medication cards. 
                            If a new game is played, the player with the most points becomes the first player.
                        </p>
                    </div>
                    <div class="real-corps-block" id="retour">
                        <a href="../realisations">
                            <button class="btn"><i class="fa fa-arrow-left"></i> Accomplishments</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <footer>
        <ul class="copy"> 
                <li>© 2024 Diallo Aboubacar | All rights reserved.</li> 
                <li><a href="../mentionslegales">Legal information</a></li>
            </ul>
        </footer>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!--Pour les animations de scroll-->
        <script>
            AOS.init();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js" 
        integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../../js/app.js"></script>
    </body>
</html>