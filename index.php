<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <link rel="stylesheet" href="./style/main.css">
        <title>Menu de navigation</title>
    </head>

    <body>
        <header>
                <div class="header_top">
                    <h1>Menu de navigation</h1>
                </div>

            <nav class="header_bottom">
                <button>Correction</button>
                <button>Exercices</button>
                <button>Cours</button>
            </nav>
        </header>

        <main class="wrapper">
            <?php
                $dir = './';
                $dossiers = scandir($dir);
                
                
                foreach ($dossiers as $lien) {
                    
                    if ($lien!= '.' && $lien!= '..' && $lien!= 'index.php' && $lien!= '.git') {
                        echo "<ul>";
                        echo "<a href=" . $lien . ">" . $lien ."</a>";
                        echo "</ul>";
                    } elseif ($lien == '..') {
                        echo "<ul><a href=" . $lien . ">⛔</a></ul>";
                    }
                }
            ?>
        </main>

        

        <script>
            function addDarkmodeWidget() {
                new Darkmode().showWidget();
            }
            window.addEventListener('load', addDarkmodeWidget);
        </script>
    </body>
</html>