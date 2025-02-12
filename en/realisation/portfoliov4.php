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
        <title>Portfolio V4 - Nevenkebla</title>
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
                <a href="../../fr/realisation/portfoliov4" class="lang">
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
                        <img src="../../img/real-portfoliov4.png" alt="Portfolio V4 Thumbnail">
                    </div>
                    <div class="real-corps-block">
                        <h1>Portfolio V4</h1>
                        <p> 
                            The programming of my portfolio was inspired by an initial version created on Wix. 
                            I chose the colors based on those in my <a href="./logo">logo</a> to ensure visual consistency. 
                            Here are the different versions of my portfolio: <br>
                            <span class="gras">V1:</span> Initial design on Wix. <br>
                            <span class="gras">V2:</span> Custom programming, online publication, and adaptation of the Wix version. <br>
                            <span class="gras">V3:</span> Addition of English and Japanese language options. <br>
                        </p>
                    </div>
                    <div class="real-corps-block">
                        <h1 id="h2">V4</h1>
                        <p> 
                            Here are the main changes made in this version of my online portfolio:
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/modifportfolio.png" alt="Change Portfolio">
                    </div>
                    <div class="real-corps-block">
                        <p>
                            <span class="gras">Removal of the "About" and "Contact" Pages:</span> 
                            The "About" page only contained information already found in my CV, 
                            making it redundant within the context of the portfolio. 
                            Therefore, I decided to remove it. As for the "Contact" page, 
                            which featured links to my social media profiles, I couldn't find a satisfactory layout. 
                            So, I moved these links to the footer for better integration.
                        </p>
                        <p>
                            <span class="gras">Removal of the Japanese Version:</span>
                            The requirement for a Japanese version came from a programming course during my DUT MMI. 
                            However, since I had to recreate each page three times and my Japanese proficiency is basic, 
                            I decided to remove this version to avoid any confusion about my language skills.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/modifportfolio2.png" alt="Change 2 Portfolio">
                    </div>
                    <div class="real-corps-block">
                        <p>
                            <span class="gras">Layout Changes:</span>
                            I replaced the old images on the homepage, which previously linked to the removed pages, 
                            with images that now direct visitors to four projects in the categories of programming, audiovisual, and video games. 
                            To improve readability, I added new colors and a font with underlined and bold elements to highlight important information.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/modifportfolio3.png" alt="Change 3 Portfolio">
                    </div>
                    <div class="real-corps-block">
                        <p>
                            <span class="gras">Addition of the "Video Game" category:</span>
                            As I accumulated projects in this field during my professional bachelor's degree, 
                            it became necessary to create a new category to organize them better.
                        </p>
                        <p>
                            <span class="gras">Merging of the "Design" and "Video Production" Categories into "Audiovisual":</span>
                            To simplify navigation, I merged these two categories. 
                            The new "Audiovisual" category now encompasses all design and video production projects.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/modifportfolio4.png" alt="Change 4 Portfolio">
                    </div>
                    <div class="real-corps-block">
                        <p>
                            <span class="gras">Addition, Removal, and Merging of Projects:</span>
                            I added several projects completed during my professional bachelor's degree while removing those I found less relevant. 
                            These were integrated into more comprehensive projects that gather all my work. 
                            Additionally, all my video creations are now organized based on the platforms where they were shared.
                        </p>
                    </div>
                    <div class="real-corps-block" id="asset">
                        <img src="../../img/modifportfolio5.png" alt="Change 5 Portfolio">
                    </div>
                    <div class="real-corps-block">
                        <p>
                            <span class="gras">Moving Contact Information to the Footer:</span>
                            As mentioned earlier, the contact information has been moved to the footer, 
                            which is absent from the project pages to avoid overloading them with information.
                        </p>
                        <p>
                            <span class="gras">Detailed projects:</span>
                            The older projects on my portfolio lacked detail compared to the new ones. 
                            I added images and additional information to make them more complete. 
                            For example, I detailed Version 4 of this page, describing point by point the enhancements made in this portfolio version. <br>
                            <span class="sousligne">Programming languages used:</span><br>
                        </p>  
                        <div class="outils">
                            <img src="../../img/html.png" alt="Html Icon">
                            <img src="../../img/css.png" alt="Css Icon">
                            <img src="../../img/javascript.png" alt="Javascript Icon">
                            <img src="../../img/php.png" alt="Php Icon">
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