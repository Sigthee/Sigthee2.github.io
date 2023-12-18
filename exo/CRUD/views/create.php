<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style/main.css">
    <title>Creation Livre</title>
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

    <form action="../controllers/create_ctrl.php" method="post" class="createbook">
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre">
        
        <label for="ISBN">ISBN</label>
        <input type="text" name="ISBN" id="ISBN" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="50">
        
        <label for="resume">Résumé</label>
        <input type="text" name="resume" id="resume">

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>