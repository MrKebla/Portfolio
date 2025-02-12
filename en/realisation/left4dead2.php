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
        <title>Left 4 Dead 2 - Nevenkebla</title>
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
                <a href="../../fr/realisation/left4dead2" class="lang">
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
                        <img src="../../img/real-left4dead2.png" alt="Left 4 Dead 2 Levels Thumbnail">
                    </div>
                    <div class="real-corps-block">
                        <h1>Level Design — Left 4 Dead 2</h1>
                        <p> 
                            As part of my professional degree, we were tasked with creating, in groups of three or four, 
                            a campaign for the game <span class="italique">Left 4 Dead 2</span>. 
                            I worked with <a href="https://adrigollum.github.io/Portfolio/" target="_blank">Adrien Chateau</a>  
                            and <a href="http://elwan-saillant.com/" target="_blank">Elwan Saillant</a>, 
                            and I was responsible for designing the first mission of the campaign. 
                            Having recently completed both games in the series with some friends 
                            (highlights and short clips from those sessions are available on my social media), 
                            I already had a solid foundation and an in-depth knowledge of the game’s mechanics and possibilities. 
                            This knowledge allowed me to better manage the design of levels, collectable items, and character interactions.
                        </p>
                        <p>
                            We decided to set our level in Paris. 
                            e also wanted our campaign to begin with a section on one of the city’s elevated metro lines. 
                            The campaign would end with the group being rescued in the middle of a stadium. 
                            We needed to find a location in Paris that fit these constraints as closely as possible. 
                            That’s how we chose Stade Charl&eacute;ty, located near Place d’Italie station, 
                            which is served by Line 6, one of Paris’s elevated metro lines. 
                            In the first mission, the elevated metro was to be derailed on the tracks, 
                            allowing the survivors to continue their journey on foot through the streets.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/left4dead2photo.png" alt="Glaci&egrave;re station Picture">
                        <img src="../../img/left4dead2photo2.png" alt="Boulevard Picture">
                    </div>
                    <div class="real-corps-block">
                        <p>
                            <span class="gras">Pitch :</span> <br>
                            The group of survivors had set up camp in the “Glaci&egrave;re” station, but their food supplies were running low. 
                            That’s when they hear a radio message announcing an evacuation from Stade Charl&eacute;ty. 
                            The group decides to head there using the abandoned metro tracks, which they believe to be the fastest and safest route. 
                            Along the way, they need to pass through the Italie 2 shopping center to stock up on supplies and possibly find a faster means of transportation.
                        </p>
                        <p>
                            Initially, the first part of the campaign was supposed to take place entirely in the metro. 
                            However, this idea was abandoned in favor of a more realistic approach. 
                            Having finished both games in the *Left 4 Dead* franchise, I was well-acquainted with the structure of the levels. 
                            In these games, transitions between indoor and outdoor environments are common. 
                            I decided to follow this approach for my level, 
                            with characters alternating between indoor passages and transport routes, and outdoor street sections.
                        </p>
                        <p>
                            The special infected are all placed in areas where they can best utilize their abilities. 
                            The layout of the level’s elements was designed to ensure that players quickly and easily understand the correct path, 
                            whether through character dialogue or the placement of various elements. 
                            For instance, to indicate that players need to enter a building to progress, car headlights illuminate the entrance. <br>
                            <span class="sousligne">Software used:</span><br>
                        </p>
                        <div class="outils">
                            <img src="../../img/adobe-photoshop.png" alt="Photoshop Logo">
                        </div>
                        <p> Pdf Document: <br>
                            <a href="../../doc/Diallo-Aboubacar_Left4Dead2.pdf"><button class="btn"> Level Design Document </button></a>
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