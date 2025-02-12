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
        <title>Uncharted - Nevenkebla</title>
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
                <a href="../../fr/realisation/uncharted" class="lang">
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
                        <img src="../../img/real-uncharted.png" alt="Uncharted Levels Thumbnail">
                    </div>
                    <div class="real-corps-block">
                        <h1>Level Design — Uncharted</h1>
                        <p> 
                            As part of my professional degree, I was required to create two levels for an action-adventure game. 
                            Having recently finished several games, I decided to draw inspiration from the <span class="italique">Uncharted</span> series. 
                            The objective was to design a stealth level and a combat level. 
                            After considering the different games in the series, I noticed that the Asian setting was not extensively explored. 
                            I then conducted research to find ancient structures that could serve as settings for these levels. 
                        </p>
                        <p>
                            This led me to the Yonaguni underwater structure, 
                            located at the southern tip of the island of the same name in Japan’s Ryukyu Archipelago. 
                            I drew inspiration from this discovery to create my combat level and define Nathan's objective. 
                            During my research, I also came across Japanese legends and myths, such as the story of Amaterasu, 
                            who locked herself in a cave after a dispute with her brother Susanoo. 
                            I thought that a cave would be an excellent choice for a stealth area.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/unchartedamaterasu.png" alt="Amaterasu Picture">
                        <img src="../../img/unchartedyonaguni.png" alt="Yonaguni Picture">
                    </div>
                    <div class="real-corps-block">
                        <p>
                            Choosing a cave level seemed logical for accessing an underwater structure. The cave features multiple elevation levels. 
                            To maintain an underwater logic, the lower areas are flooded, requiring Nathan to swim through them. 
                            The higher areas are occupied by the level’s most significant enemies. 
                            Collectible items related to the area’s story are scattered throughout the level. 
                            Since it’s a stealth level, various structures and objects were placed to allow Nathan to hide from enemy patrols.
                        </p>
                        <p>
                            Before reaching the temple, Nathan must navigate a submerged passage by swimming and climbing slippery walls. 
                            Upon arriving at the temple, Nathan sets aside his diving gear and must solve a puzzle: 
                            finding a way to balance the water level in each basin. 
                            After solving the puzzle and retrieving the artifact, the temple is assaulted by enemies. 
                            This causes irreversible damage to the temple, which begins to collapse and flood.
                        </p>
                        <p>
                            Nathan must then escape the temple while fighting his way through enemies to retrieve his diving gear. 
                            With his original path blocked by the collapse, new routes open up thanks to fallen statues and other debris. 
                            Nathan manages to recover his gear and escape the enemies, but the temple ultimately collapses and floods entirely. 
                            Nathan is finally rescued at the surface by his lifelong friend, Sully. <br>
                            <span class="sousligne">Software used:</span><br>
                        </p>
                        <div class="outils">
                            <img src="../../img/adobe-photoshop.png" alt="Photoshop Logo">
                        </div>
                        <p> Pdf Documents: <br>
                            <a href="../../doc/Diallo-Aboubacar_BubbleDiagram-Uncharted.pdf"><button class="btn"> Bubble Diagram LDD </button></a>
                            <a href="../../doc/Diallo-Aboubacar_Croquis-Uncharted.pdf"><button class="btn"> Sketch LDD </button></a>
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