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
        <title>Logo - Nevenkebla</title>
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
                <a href="../../fr/realisation/logo" class="lang">
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
                    <div class="real-corps-block" id="logo">
                        <img src="../../img/LogoFond.png"  alt="Nevenkebla's Logo">
                        <img src="../../img/Logo2Fond.png"  alt="Nevenkebla's Logo 2">
                    </div>
                    <div class="real-corps-block">
                        <h1>Nevenkebla's Logo</h1>
                        <p> 
                            The logo was completely redesigned by my friend <a href="https://www.glenn-delame-realisations.com/">Glenn Delame</a>.
                            Only the primary colors were kept. 
                            A sword, along with several shapes and a new color, was added. 
                            Multiple variations of the logo were also created.
                        </p>
                    </div>
                    <div class="real-corps-block" id="logo">
                        <img src="../../img/AncienLogoFond.png"  alt="Logo de Nevenkebla">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Creation</h1>
                        <p> 
                            Like many people on the Internet, I used several pseudonyms before settling on NevenKebla. 
                            Having grown up with YouTube and its content creators, I tried to create my own logo for each pseudonym I used. 
                            This usually involved combining the letters of the syllables in my username. 
                            Without any formal training in graphic design, the results weren’t always aesthetically pleasing. 
                            So, when I changed my old pseudonym to NevenKebla, I knew I wanted a logo. <br><br>
                            I already had an idea of what I wanted it to look like: a combination of the letters N and K. 
                            The K would be duplicated and mirrored, forming a diamond shape in the center of the N. 
                            Being a huge fan of The Legend of Zelda series, I also wanted to incorporate the Master Sword. 
                            Since my favorite color is blue, I chose different shades of blue for my logo. 
                            With these ideas in mind and the graphic design skills I gained during my DUT MMI, I created the first version of my logo. <br>
                            <span class="sousligne">Software used:</span><br>
                        </p>
                        <div class="outils"> 
                            <img src="../../img/paint-net.png" alt="Paint.net Logo">
                            <img src="../../img/adobe-photoshop.png" alt="Photoshop Logo">
                        </div>
                    </div>
                    <div class="real-corps-block" id="logo">
                        <img src="../../img/LogoG.png"  alt="Logo de Nevenkebla Grand">
                        <img src="../../img/LogoPFond.png"  alt="Logo de Nevenkebla Petit">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Redesign</h1>
                        <p> 
                            During my DUT MMI, I met some talented individuals specializing in graphic design, 
                            including <a href="https://www.glenn-delame-realisations.com/">Glenn Delame</a>, 
                            who I felt was more skilled than I was in this field. 
                            I asked him if he could redesign my logo in his free time to see if he could improve it. 
                            The only constraints I gave him were to keep the colors and include references to the Zelda series. 
                            He kindly agreed and quickly came back with several variations. 
                            Since I found it hard to choose, I asked if I could use all the versions he had created. 
                            Among them, one particularly stood out to me, and it’s the one currently displayed on my portfolio. <br>
                            <span class="sousligne">Software used:</span><br>
                        </p>
                        <div class="outils"> 
                            <img src="../../img/adobe-illustrator.png" alt="Illustrator Logo">
                        </div>
                    </div>
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