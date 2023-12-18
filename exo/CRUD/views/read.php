<?php
    require_once '../assets/fonction/db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style/main.css">
    <title>Liste Livre</title>
</head>
<body>
    <header>
        <h1>LIVRES</h1>
        <nav>
            <a href="../index.php">Index</a>
            <a href="./create.php">Creation</a>
            <a href="./read.php">Liste</a>
        </nav>
    </header>


    <table class="read">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>ISBN</th>
            <th>Résumé</th>
        </tr>

        <?php
            require '../controllers/read_crtl.php'
        ?>
    </table>
</body>
</html>