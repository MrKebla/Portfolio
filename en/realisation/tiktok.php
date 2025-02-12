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
        <title>TikTok - Nevenkebla</title>
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
                <a href="../../fr/realisation/tiktok" class="lang">
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
                        <a href="https://www.tiktok.com/@nevenkebla_" target="_blank">
                            <img src="../../img/real-tiktok.png" alt="TikTok Thumbnail">
                        </a>
                    </div>
                    <div class="real-corps-block">
                        <h1>Reels — TikTok — Shorts</h1>
                        <p>  
                            On my TikTok account, I share clips of game sessions with my friends. 
                            These clips often highlight funny or unusual situations. 
                            They are usually included in my longer videos that I post on other platforms. 
                            I recorded these videos using the Streamlabs OBS capture software. 
                            To edit my first video, I used InShot, a mobile video editing app. 
                            Later, I switched to the professional editing software Adobe Premiere Pro. <br>
                            Feel free to subscribe! <br>
                        </p>
                        <a href="https://www.instagram.com/nevenkebla_/" target="_blank">
                            <button class="btn"><i class="fa-brands fa-instagram"></i> Get there <i class="fa fa-arrow-up-right-from-square"></i></button>
                        </a>
                        <a href="https://www.tiktok.com/@nevenkebla_" target="_blank">
                            <button class="btn"><i class="fa-brands fa-tiktok"></i> Get there <i class="fa fa-arrow-up-right-from-square"></i></button>
                        </a>
                        <a href="https://www.youtube.com/@nevenkebla_/shorts" target="_blank">
                            <button class="btn"><i class="fa-brands fa-youtube"></i> Get there <i class="fa fa-arrow-up-right-from-square"></i></button>
                        </a>
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Discovering and sharing</h1>
                        <p>  
                            I discovered TikTok back when it was still called Musical.ly, but the musical content at that time didn’t interest me.
                            I later downloaded the application (like many others) during the first lockdown. 
                            At that time, I didn't have the necessary equipment to share content, so I didn't post anything.
                            I noticed that many of videos on TikTok were related to video games, 
                            which gave me the idea to share fun moments from my recordings.
                            I downloaded the InShot video editing app on my phone and I created a short montage inspired by the videos I had seen on TikTok.
                            I asked for permission from the people whose voices could be heard in the video, and then I shared it on TikTok. <br><br>
                            Posting videos on TikTok is different from doing so on other social media platforms like <a href="./youtube">Youtube</a>. 
                            I had to adapt the video to a mobile format and choose a short but funny clip. 
                            Although the maximum video length on TikTok has increased, I still prefer to stick to a short format. 
                            The following videos were edited with Adobe Premiere Pro. 
                            They involve a bit more editing but still align with the spirit of my channel. <br><br>
                            After seeing TikTok’s success, other platforms decided to create their own versions. 
                            YouTube launched YouTube Shorts, and Instagram introduced Reels. 
                            In 2023, I started sharing the short videos originally made for TikTok on these platforms. 
                            Since the format is the same, I simply posted them without needing to modify anything. 
                            These videos received less success than on TikTok, mainly due to the difference in algorithms. 
                            Since then, I’ve been posting each short video on all these platforms simultaneously. <br>
                            <span class="sousligne">Software used:</span><br>
                        </p>
                        <div class="outils">
                            <img src="../../img/streamlabs-obs.png" alt="Streamlabs Obs Logo">
                            <img src="../../img/inshot.png" alt="Inshot Logo">
                            <img src="../../img/adobe-premierepro.png" alt="Premiere Pro Logo">
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