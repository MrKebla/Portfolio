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
        <title>Tutored Project - Nevenkebla</title>
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
                <a href="../../fr/realisation/projettut" class="lang">
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
                        <a href="https://mrkebla.github.io/AgenceCreons/" target="_blank">
                            <img src="../../img/real-projettut.png" alt="Tutored Project Picture">
                        </a>
                    </div>
                    <div class="real-corps-block">
                        <h1>Tutored Project</h1>
                        <p> 
                            As part of our tutored project, no specific theme was imposed. 
                            We had to propose a project idea and form a group with people who were interested in that idea. 
                            Once the group was formed, 
                            we collaborated with the members and professors to develop and refine the idea to make it feasible. <br><br>
                            We decided to present ourselves under the name "Cr&eacute;ons" agency, with a project titled "GraphWe".
                            Our team consisted of 8 members: a project manager, two programmers, three designers, and two communicators. 
                            I took on the role of programmer alongside my colleague,
                            <a href="https://www.behance.net/tedkgames" target="_blank">Teddy Ausousseau</a>.  
                            Our task was to develop two websites: one to represent our agency and the other to promote our project.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/accueilcreons.png" alt="Cr&eacute;ons's Homepage">
                        <img src="../../img/agencecreons.png" alt="Cr&eacute;ons's Agency Page">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Agency Website</h1>
                        <p> 
                            I initially created a website on my own, but it didn’t fully meet the professors’ expectations in terms of professionalism. 
                            Although the structure and content were satisfactory, the layout needed improvement. 
                            I decided to keep the structure and content of the original site while redesigning the layout to make it more professional. <br><br>
                            To achieve this, I drew inspiration from real agency websites and consulted several tutorials to create the best possible site within the given time frame. 
                            This research allowed me to deepen my knowledge of HTML, CSS, and JavaScript. 
                            I also coded the site so that it could be easily updated, 
                            allowing me to quickly add new documents produced by the agency and update the project’s progress.
                            The site now presents all the documents and information related to the Cr&eacute;ons agency project, 
                            along with the list of team members and their respective roles. <br>
                            <span class="sousligne">Programming languages used:</span><br>
                        </p>
                        <div class="outils">
                            <img src="../../img/html.png" alt="Html Icon">
                            <img src="../../img/css.png" alt="Css Icon">
                            <img src="../../img/javascript.png" alt="Javascript Icon">
                        </div>
                        <a href="https://mrkebla.github.io/AgenceCreons/" target="_blank">
                            <button class="btn">Get there <i class="fa fa-arrow-up-right-from-square"></i></button>
                        </a>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/dessingraphwe.png" alt="GraphWe's Drawing Page">
                        <img src="../../img/aidegraphwe.png" alt="GraphWe's Help Page">
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">Graphwe Project</h1>
                        <p> 
                            The GraphWe project is an interactive platform that allows users to create collaborative illustrations from start to finish, 
                            inspired by the <a href="https://garticphone.com/fr" target="_blank">Gartic Phone</a> concept. 
                            Each illustration can be taken up and enhanced up to five times by different participants, 
                            who can add details, colors, characters, or other creative elements. 
                            Once completed, these collaborative works are showcased in a dedicated gallery on the GraphWe website, 
                            providing a platform for collective creativity. <br><br>
                            To strengthen the project's visual identity, the design team created a mascot in the form of a pencil, 
                            symbolizing the main tool used for creating on GraphWe. 
                            This mascot also serves to guide and inspire users throughout their experience on the platform. <br>
                            <span class="sousligne">Programming languages used:</span><br>
                        </p>
                        <div class="outils"> 
                            <img src="../../img/html.png" alt="Html Icon">
                            <img src="../../img/css.png" alt="Css Icon">
                            <img src="../../img/javascript.png" alt="Javascript Icon">
                            <img src="../../img/php.png" alt="Php Icon">
                        </div>
                        <a href="https://mrkebla.github.io/AgenceCreons/graphwe/" target="_blank">
                            <button class="btn">Get there <i class="fa fa-arrow-up-right-from-square"></i></button>
                        </a>
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