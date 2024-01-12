<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/main.css">
    <title>Koala</title>
</head>
<body>
    <div class="boite">
        <div class="oreilleGauche">
            <div class="oreilleGaucheInt"></div>
        </div>
        
        <div class="oreilleDroite">
            <div class="oreilleDroiteInt"></div>
        </div>
        
        <div class="visage">
            <div class="oeilGauche">
                <div class="pupilleGauche"></div>
                <div class="paupiereGauche"></div>
            </div>
            <div class="oeilDroit">
                <div class="pupilleDroite"></div>
                <div class="paupiereDroite"></div>
            </div>
            <div class="nez">
                <div class="narineGauche"></div>
                <div class="narineDroite"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var pupilleGauche = document.querySelector('.pupilleGauche');
            var pupilleDroite = document.querySelector('.pupilleDroite');

            document.addEventListener('mousemove', function (e) {
                var x = e.clientX / window.innerWidth - 0.5;
                var y = e.clientY / window.innerHeight - 0.5;

                var maxTranslation = 80;

                var translateXGauche = x * maxTranslation;
                var translateYGauche = y * maxTranslation;

                var translateXDroite = x * maxTranslation;
                var translateYDroite = y * maxTranslation;

                pupilleGauche.style.transform = 'translate(' + translateXGauche + 'px, ' + translateYGauche + 'px)';
                pupilleDroite.style.transform = 'translate(' + translateXDroite + 'px, ' + translateYDroite + 'px)';
            });
        });
    </script>
</body>
</html>