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
        <title>Error 404 - Nevenkebla</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&family=Roboto&family=Taviraj:wght@300&display=swap" rel="stylesheet"> <!--La police google font-->
        <link rel="icon" href="../../img/LogoFond.png" type="image/png"/>
        <style>
            body {
                margin: 0;
                padding: 0;
                min-height: 100vh;
                background: #04041c;
                font-family: 'Roboto', sans-serif;
            }

            h1 {
                font-family: 'Open Sans', sans-serif;
            }
            
            img {
                width: 15%;
            }

            .container {
                width: 100%;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                text-align: center;
            }

            .container h1 {
                color: #c4c4c4;
            }

            .btn {
                border-width: 1px;
                padding: 0.5rem 1rem;
                margin: 1rem 0 1rem;
                text-transform: uppercase;
                letter-spacing: 2px;
                cursor: pointer;
                background: rgb(250, 250, 250);
                border-radius: 7px;
                transition: 0.3s;
            }

            .btn:hover {
                background-color: #255a5f;
                color: rgb(230, 230, 230);
            }

            p {
                color: rgb(200, 200, 200);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="../../img/logo.png" alt="Nevenkebla's Logo">
            <h1>Error 404</h1>
            <p>Page not found.</p>
            <a href="./index"><button class="btn">Home</button></a>
        </div> 
    </body>
</html>