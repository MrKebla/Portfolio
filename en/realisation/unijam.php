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
        <title>Unijam - Nevenkebla</title>
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
                <a href="../../fr/realisation/unijam" class="lang">
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
                        <img src="../../img/real-unijam.png" alt="Effondrement's Logo">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="unijam">Unijam 2022 — L'effondrement</h1>
                        <p>
                            The goal of this Game Jam was to create a game in less than 48 hours, based on the theme "Distance makes everything infinitely more precious". 
                            In a team of four, with <a href="https://davall.fr/" target="_blank">Allan David</a>, 
                            <a href="https://jeffreybondue.wixsite.com/portfolio" target="_blank">Jeffrey Bondue</a> 
                            and <a href="https://adrigollum.github.io/Portfolio/" target="_blank">Adrien Chateau</a>, 
                            we created the game "L'effondrement" ("The Collapse"). 
                            It is a road trip visual novel where you must make the right decisions to reach your destination. 
                            To survive the collapse, a group of five characters must travel to Perpignan, the last bastion of humanity. 
                            They start by gathering resources at a supermarket in Lille.
                        </p>
                        <p>
                            In this project, 
                            I was responsible for identifying French cities that allowed for a logical route and mapping out possible paths. 
                            Together with my teammate Adrien Chateau, we searched for representations of these cities, 
                            such as landmarks or famous locations, to help the player quickly and easily recognize where they are. 
                            We also created scenarios for each city, based on the images chosen to represent them. 
                            These increasingly complex scenarios are filled with various references, drawn from the cities' reputations, 
                            famous figures, and their portrayal in other media.
                        </p>
                        <a href="https://effondrement.davall.fr/" target="_blank">
                            <button class="btn">Play it <i class="fa fa-arrow-up-right-from-square"></i></button>
                        </a>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/unijam.png" alt="Unijam Picture">
                        <img src="../../img/unijam2.png" alt="Unijam Picture 2">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Start of the game</h1>
                        <p>
                            At the start of the game, a text explaining the situation appears, followed by the shopping phase in the convenience store. 
                            Each character is introduced via a profile card, and they share a common budget. 
                            Every character has specific skills that make them more or less effective in different areas.
                        </p>
                        <p>
                            The player must strategically choose which resources to buy, as both money and time are limited. 
                            They can prioritize food to keep their characters alive until the end of the road trip, 
                            or explore different aisles to find unexpected yet valuable resources for the journey.
                        </p>
                        <p>
                            Next, the player selects a driver. 
                            All the characters are visible in the back of the van, and by hovering over their portraits with the cursor, 
                            the player can view their profile card. 
                            This card shows their identity, skills, and their status in terms of health, fatigue, hunger, and thirst. 
                            A character who is too exhausted cannot drive, and a character is considered dead when their health bar is empty. 
                            If their hunger or thirst bar is empty, their health gradually decreases.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/unijam3.png" alt="Unijam Picture 3">
                        <img src="../../img/unijam4.png" alt="Unijam Picture 4">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Choices</h1>
                        <p>
                            After choosing the driver, the next step is to select the destination. 
                            Depending on the available resources, some destinations may be inaccessible. 
                            In the game, fuel represents the maximum distance the player can travel. 
                            If the player runs out of fuel, they lose the game because the characters can no longer move. 
                            Fuel is therefore an extremely valuable resource.
                        </p>
                        <p>
                            There are two types of routes available, depending on the amount of fuel the player has: a regular road and a highway. Depending on the city, the player can access one or four other cities.
                            The regular road takes the player to the next city and costs one unit of fuel.
                            The highway allows the player to skip a city and reach the next one, but it costs two units of fuel.
                        </p>
                        <p>
                            Once the destination is reached, the player sees through the driver's eyes and is presented with two choices, 
                            one of which is usually more beneficial than the other. 
                            After making the first decision, the player must choose which character will carry out the action. 
                            This character will lose or gain health and/or energy depending on the player's choice. 
                            Some choices also allow the player to recover fuel.
                        </p>
                        <p>
                            After the action is completed, the next day begins. The player must again select a driver, then a destination, and so on. 
                            Each new day, the characters lose a bit of hunger and thirst. 
                            The player must therefore find the right paths and make the right decisions if they wish to reach the final destination.
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