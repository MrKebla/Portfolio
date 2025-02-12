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
        <title>Portfolio - Nevenkebla</title>
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
                <a href="../fr/realisations" class="lang">
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
                    <a href="index"> <img src="../img/Logo.png" alt="Nevenkebla's Logo"></a>
                </div>
                <div class="toggle">
                    <i class="fas fa-bars ouvrir"></i>
                    <i class="fas fa-times fermer"></i>
                </div>
                <ul class="menu">
                    <li><a href="index" class="menu-lien">Home</a></li>
                    <li><a href="#" class="menu-lien" id="active">Accomplishments</a></li>
                </ul> 
            </nav>
        </header>
        <section class="realisations">
            <div class="container">
                <h1>Accomplishments</h1>
                <div id="myBtnContainer">
                    <button class="btn active" onclick="filterSelection('tous')">All</button>
                    <button class="btn" onclick="filterSelection('prog')">Programming</button>
                    <button class="btn" onclick="filterSelection('audiovisuel')">Audiovisual</button>
                    <button class="btn" onclick="filterSelection('jeuvideo')">Video Game</button>
                </div>
                <div class="row" data-aos="zoom-in">
                    <div class="column prog">
                        <div class="content">
                            <a href="realisation/projettut">
                                <img src="../img/real-projettut.png" alt="Site Tutored Project">
                            </a>
                        </div>
                    </div>
                    <div class="column prog">
                        <div class="content">
                            <a href="realisation/portfoliov4">
                                <img src="../img/real-portfoliov4.png" alt="Portfolio V4 Picture">
                            </a>
                        </div>
                    </div>

                    <div class="column audiovisuel">
                        <div class="content">
                            <a href="realisation/youtube">
                                <img src="../img/real-youtube.png" alt="Youtube Thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="column audiovisuel">
                        <div class="content">
                            <a href="realisation/logo">
                                <img src="../img/real-logo.png" alt="Nevenkebla's Logo V2">
                            </a>
                        </div>
                    </div>
                    <div class="column audiovisuel">
                        <div class="content">
                            <a href="realisation/tiktok">
                                <img src="../img/real-tiktok.png" alt="Tik Tok Thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="column audiovisuel">
                        <div class="content">
                            <a href="realisation/twitch">
                                <img src="../img/real-twitch.png" alt="Twitch Thumbnail">
                            </a>
                        </div>
                    </div>

                    <div class="column jeuvideo">
                        <div class="content">
                            <a href="realisation/sickgame">
                                <img src="../img/real-sickgame.png" alt="Sick Game Thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="column jeuvideo">
                        <div class="content">
                            <a href="realisation/unijam">
                                <img src="../img/real-unijam.png" alt="L'effondrement Thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="column jeuvideo">
                        <div class="content">
                            <a href="realisation/uncharted">
                                <img src="../img/real-uncharted.png" alt="Uncharted's Levels Thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="column jeuvideo">
                        <div class="content">
                            <a href="realisation/left4dead2">
                                <img src="../img/real-left4dead2.png" alt="Left 4 Dead 2 Levels Thumbnail">
                            </a>
                        </div>
                    </div>
                    <div class="column jeuvideo">
                        <div class="content">
                            <a href="realisation/highfive">
                                <img src="../img/real-highfive.png" alt="High Five Thumbnail">
                            </a>
                        </div>
                    </div>
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