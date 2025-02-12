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
        <title>Home - Nevenkebla</title>
        <script src="https://kit.fontawesome.com/a44d991d57.js" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--Les animations de scroll-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&family=Roboto&family=Taviraj:wght@300&display=swap" rel="stylesheet"> <!--La police google font-->
        <link rel="icon" href="../img/LogoFond.png" type="image/png"/>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <div class="langs">
                <a href="../fr/index" class="lang">
                    <img src="../img/france.png" alt="France Flag">
                    <p>Fran&ccedil;ais</p> 
                </a>
                <a href="#" class="lang">
                    <img src="../img/english.png" alt="United-States Flag">
                    <p>English</p>
                </a>
            </div>
            <nav>
                <div class="logo">
                    <a href="#"><img src="../img/Logo.png" alt="Nevenkebla's Logo"></a>
                </div>
                <div class="toggle">
                    <i class="fas fa-bars ouvrir"></i>
                    <i class="fas fa-times fermer"></i>
                </div>
                <ul class="menu">
                    <li><a href="#" class="menu-lien" id="active">Home</a></li>
                    <li><a href="realisations" class="menu-lien">Accomplishments</a></li>
                </ul> 
            </nav>
        </header>
        <section class="prez">
            <div class="container">
                <div class="prez-corps" data-aos="zoom-in">
                    <div class="prez-corps-block">
                        <h1>Aboubacar Diallo</h1><br>
                        <h2>Portfolio</h2><br>
                        <p> 
                            Welcome to my portfolio. <br>
                            I'm Aboubacar Diallo, 22 years old, student in a <span class="under">professional degree in Video Games: 
                            level designer and game designer</span> at the IUT of Bobigny, Sorbonne Paris Nord.
                        </p>
                        <a href="../doc/Diallo-Aboubacar_CV.pdf" target="_blank"><button class="btn">My Resume</button></a>
                    </div>
                    <div class="prez-corps-block">
                        <img src="../img/LogoFond.png" alt="Nevenkebla's Logo">
                    </div>
                </div>
            </div>
        </section>
        <section class="proj">
            <div class="container">
                <h2>A few projects</h2>
                <div class="proj-corps" data-aos="fade-up">
                    <div class="proj-corps-block"> 
                        <a href="./realisation/projettut">
                            <img src="../img/real-projettut.png" alt="Tutored Project Thumbnail">
                        </a>
                    </div>
                    <div class="proj-corps-block">
                        <a href="./realisation/youtube">
                            <img src="../img/real-youtube.png" alt="Youtube Thumbnail">
                        </a> 
                    </div>
                    <div class="proj-corps-block">
                        <a href="./realisation/sickgame">
                            <img src="../img/real-sickgame.png" alt="Sick Game Thumbnail">
                        </a>
                    </div>
                    <div class="proj-corps-block">
                        <a href="./realisation/highfive">
                            <img src="../img/real-highfive.png" alt="High Five Thumbnail">
                        </a>
                    </div>
                </div>
                <div class="proj-corps" id="voirplus">
                    <a href="./realisations">
                        <button class="btn">See more <i class="fa fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
        </section>
        <footer>
            <div class="contact">
                <a href="mailto:aboubacar_diallo@outlook.com"><h2>Aboubacar_diallo@outlook.com</h2></a>
                <a href="https://www.linkedin.com/in/diallo-aboubacar/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/@nevenkebla_" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://twitter.com/Nevenkebla_" target="_blank"><i class="fab fa-twitter"></i></a>  
                <a href="https://www.twitch.tv/nevenkebla" target="_blank"><i class="fab fa-twitch"></i></a>
                <a href="https://www.tiktok.com/@nevenkebla_" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.instagram.com/nevenkebla_/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <ul class="copy"> 
                <li>© 2024 Diallo Aboubacar | All rights reserved.</li> 
                <li><a href="mentionslegales">Legal information</a></li>
            </ul>
        </footer>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!--Pour les animations de scroll-->
        <script>
            AOS.init();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js" 
        integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../js/app.js"></script>
    </body>
</html>