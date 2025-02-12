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
        <title>Youtube - Nevenkebla</title>
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
                <a href="../../fr/realisation/youtube" class="lang">
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
                        <a href="https://www.youtube.com/@nevenkebla_" target="_blank">
                            <img src="../../img/real-youtube.png" alt="Youtube Thumbnail">
                        </a>
                    </div>
                    <div class="real-corps-block">
                        <h1>Youtube</h1>
                        <p> 
                            I occasionally share content on YouTube, mainly video edits created during my free time. 
                            These videos include clips from game nights with friends, edited to capture the most fun and memorable moments. 
                            This content is sometimes also shared on my other social media platforms. <br><br>
                            On my channel, you will find a variety of videos, including musical montages, 
                            best-of compilations from multiple gaming sessions, as well as short video clips. 
                            My goal is to entertain and share authentic moments with my community.  <br>
                            If you enjoy this kind of content, feel free to subscribe so you don’t miss out! <br>
                            <span class="sousligne">Software used:</span><br>
                        </p>
                        <div class="outils"> 
                            <img src="../../img/streamlabs-obs.png" alt="Streamlabs Obs Logo">
                            <img src="../../img/adobe-premierepro.png" alt="Premiere Pro Logo">
                            <img src="../../img/adobe-aftereffects.png" alt="After Effects Logo">
                            <img src="../../img/adobe-photoshop.png" alt="Photoshop Logo">
                            <img src="../../img/inshot.png" alt="Inshot Logo">
                            <img src="../../img/share-factory.png" alt="Share Factory Logo">
                        </div>
                        <a href="https://www.youtube.com/@nevenkebla_" target="_blank">
                            <button class="btn">Get there <i class="fa fa-arrow-up-right-from-square"></i></button>
                        </a>
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Childhood</h1>
                        <p> 
                            I discovered YouTube during my primary school years, where I made most of my early discoveries in video games. 
                            At the time, I didn’t have the equipment or a powerful enough computer to record and share videos, so I followed many YouTubers of that era. 
                            Diablox9 and Siphano were the two content creators who introduced me to my favorite game, Minecraft, 
                            as well as my favorite game series, The Legend of Zelda. 
                            They also played a significant role in nurturing my love and passion for video games.
                        </p>
                        <p>
                            Later on, I tried recording my screen on the family computer using software like Fraps and Camtasia. 
                            However, the computer wasn’t powerful enough for high-quality recordings, and most of those videos couldn’t be preserved. 
                            After the family computer was replaced, I managed to save a few recordings from that time, 
                            a practice I continued into the beginning of my high school years.
                        </p>
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Since high school</h1>
                        <p> 
                            In high school, I got my PlayStation 4, which allows you to record gameplay. 
                            I discovered this feature towards the end of high school, so I wasn’t able to record all the games I played. 
                            Most of my PS4 recordings were made on Apex Legends. 
                            After a gaming session, I discovered Share Factory, an editing software available on the PS4. 
                            I decided to start editing and sharing my recordings, which led to my first videos on YouTube. 
                            These videos were primarily experiments to explore the possibilities offered by Share Factory, 
                            whether in terms of effects, transitions, or music.
                        </p>
                        <p>
                            At the end of high school, just after the first lockdown, my friends got together to gift me my first personal computer. 
                            This PC was powerful enough to play and capture most games. 
                            During my DUT MMI, I had my first editing courses using DaVinci Resolve. 
                            Later, I applied this knowledge to Premiere Pro and After Effects, the software I now use for all my recent videos.
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