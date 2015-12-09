<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LA Studio</title>
        <meta name="description" content="la Studio est une entreprise de communication grenobloise spécialisée dans la stratégie web et médias sociaux">
        <meta name="keywords" content="LA-Studio, Léa Schmidt, Communication, Digitale, Freelance">
        <link rel="icon" href="favicon.ico">
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- START Global container -->
        <div class="container">

            <!-- START 1st Upfront Bloc -->
            <!-- NOTE style attribute in the div Upfront block is a trick for browser compatibility -->
            <div class="Upfront Upfront--first flex-right" style="-webkit-clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 70%); clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 70%); clip-path: url(#firstPolygon);">
                <div class="Upfront__item Upfront__animate Upfront__animate-first">
                    <div class="Upfront__content">
                        <h2 class="Upfront__title">Bienvenue</h2>
                        <p class="Upfront__text">sur LA-Studio</p>
                    </div>
                    <div class="Upfront__media">
                        <img class="image" src="images/200x200_LA_studio.png" alt="Logo de LA Studio">
                    </div>
                </div>
            </div>
            <!-- END 1st Upfront Bloc -->

            <!-- START 2nd Upfront Bloc -->
            <div class="Upfront Upfront--second flex-left">
                <div class="Upfront__item Upfront__animate Upfront__animate-second">
                    <div class="Upfront__media">
                        <img class="image" id="engrenages" src="images/engrenages.png" alt="Engrenages pour signalier le site en construction">
                    </div>
                    <div class="Upfront__content">
                        <h2 class="Upfront__title">Ce site</h2>
                        <p class="Upfront__text">est en construction...</p>
                    </div>
                </div>
            </div>
            <!-- END 2nd Upfront Bloc -->

            <!-- START 3rd Upfront Bloc -->
            <!-- NOTE style attribute in the div Upfront block is a trick for browser compatibility -->
            <div class="Upfront Upfront--third flex-right" style="-webkit-clip-path: polygon(0px 40%, 100% 10%, 100% 100%, 0px 80%); clip-path: polygon(0px 40%, 100% 10%, 100% 100%, 0px 80%); clip-path: url(#thirdPolygon);">
                <div class="Upfront__item Upfront__animate Upfront__animate-third">
                                        <div class="Upfront__content">
                        <p class="Upfront__text">N'h&eacute;sitez pas &#224; me</p>
                        <h2 class="Upfront__title">Contacter</h2>
                        <p class="Upfront__text">
                            <a class="Upfront__link" href="mailto:schmidtlea.pro@gmail.com">schmidtlea.pro@gmail.com</a>
                        </p>
                    </div>
                    <div class="Upfront__media">
                        <img class="image" src="images/lettre.png" alt="Lettre pour illustrer la zone de contact">
                    </div>
                </div>
            </div>
            <!-- END 3rd Upfront Bloc -->

            <!-- START 4th Upfront Bloc -->
            <div class="Upfront Upfront--fourth flex-left">
                <div class="Upfront__item Upfront__animate Upfront__animate-fourth">
                    <div class="Upfront__media">
                        <img class="image" src="images/discussion.png" alt="Bulle de discussion pour illustrer les r&eacute;seaux sociaux">
                    </div>
                    <div class="Upfront__content">
                        <p class="Upfront__text">En attendant</p>
                        <h2 class="Upfront__title">Suivez-moi</h2>
                        <div class="Upfront__social flex-space-between">
                            <a class="Upfront__icon" id="facebook" href="https://www.facebook.com/La-Studio-Grenoble-1650220391927453" target="_blank"></a>
                            <a class="Upfront__icon" id="twitter" href="https://twitter.com/schmlea" target="_blank"></a>
                            <a class="Upfront__icon" id="linkedin" href="https://www.linkedin.com/in/schmidtlea" target="_blank"></a>
                            <a class="Upfront__icon" id="wordpress" href="https://lastudioleblog.wordpress.com" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END 4th Upfront Bloc -->

            <!-- START 5th Upfront Bloc -->
            <!-- NOTE style attribute in the div Upfront block is a trick for browser compatibility -->
            <div class="Upfront Upfront--fifth flex-right" style="-webkit-clip-path: polygon(0px 50%, 100% 20%, 100% 100%, 0px 100%); clip-path: polygon(0px 50%, 100% 20%, 100% 100%, 0px 100%); clip-path: url(#fifthPolygon);">
                <div class="Upfront__item Upfront__animate Upfront__animate-fifth">
                    <div class="Upfront__media">
                        <img class="Upfront__photo image" src="images/lea.png" alt="Photo de L&eacute;a Schmidt">
                    </div>
                    <div class="Upfront__content antiflex-right">
                        <h2 class="Upfront__title">L&eacute;a SCHMIDT</h2>
                        <p class="Upfront__text">Freelance en communication digitale</p>
                    </div>
                </div>
            </div>
            <!-- END 5th Upfront Bloc -->
        
        </div>
        <!-- END global container -->    

        <!-- START SVG polygons for browser compatibility -->
        <svg width="0" height="0">
            <defs>
                <clipPath id="firstPolygon" clipPathUnits="objectBoundingBox">
                    <polygon points="0 0, 1 0, 1 1, 0 0.7"></polygon>
                </clipPath>
            </defs>
            <defs>
                <clipPath id="thirdPolygon" clipPathUnits="objectBoundingBox">
                    <polygon points="0 0.4, 1 0.1, 1 1, 0 0.8"></polygon>
                </clipPath>
            </defs>
            <defs>
                <clipPath id="fifthPolygon" clipPathUnits="objectBoundingBox">
                    <polygon points="0 0.5, 1 0.2, 1 1, 0 1"></polygon>
                </clipPath>
            </defs>
        </svg>
        <!-- END SVG polygons for browser compatibility -->
        <script src="js/app.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-71214205-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
