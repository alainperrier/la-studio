<!DOCTYPE html>
<html>
    <head>
        <title>LA Studio</title>
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
                        <img class="image" src="images/engrenages.png" alt="Engrenages pour signalier le site en construction">
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
            <div class="Upfront Upfront--third flex-right" style="-webkit-clip-path: polygon(0px 40%, 100% 20%, 100% 100%, 0px 80%); clip-path: polygon(0px 40%, 100% 20%, 100% 100%, 0px 80%); clip-path: url(#thirdPolygon);">
                <div class="Upfront__item Upfront__animate Upfront__animate-third">
                                        <div class="Upfront__content">
                        <p class="Upfront__text">N'hésitez pas à me</p>
                        <h2 class="Upfront__title">Contacter</h2>
                        <p class="Upfront__text"><a class="Upfront__link" href="mailto:schmidtlea.pro@gmail.com">schmidtlea.pro@gmail.com</a></p>
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
                        <img class="image" src="images/discussion.png" alt="Bulle de discussion pour illustrer les réseaux sociaux">
                    </div>
                    <div class="Upfront__content">
                        <p class="Upfront__text">En attendant</p>
                        <h2 class="Upfront__title">Suivez-moi</h2>
                        <div class="Upfront__social flex-space-around">
                            <a class="Upfront__icon" id="facebook" href="#" target="_blank"></a>
                            <a class="Upfront__icon" id="twitter" href="#" target="_blank"></a>
                            <a class="Upfront__icon" id="linkedin" href="#" target="_blank"></a>
                            <a class="Upfront__icon" id="wordpress" href="#" target="_blank"></a>
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
                        <img class="Upfront__photo image" src="images/lea.png" alt="Photo de Léa Schmidt">
                    </div>
                    <div class="Upfront__content antiflex-right">
                        <h2 class="Upfront__title">Léa SCHMIDT</h2>
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
                    <polygon points="0 0.4, 1 0.2, 1 1, 0 0.8"></polygon>
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
    </body>
</html>
