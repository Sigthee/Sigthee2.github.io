<?php
    require_once '../assets/fonction/db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style/main.css">
    <title>Update</title>
</head>
<body>
    <?php
        if (isset($_GET) && !empty($_GET["id"])) {
            $l = $bdd->prepare('SELECT * FROM livre WHERE id=?');
            $l->execute(array(
                $_GET['id']
            ));
            $l = $l->fetch(PDO::FETCH_ASSOC);
            if (!empty($l)) {

            };
        };
    ?>
    <header>
        <h1>LIVRES</h1>
        <nav>
            <a href="../index.php">Index</a>
            <a href="./create.php">Creation</a>
            <a href="./read.php">Liste</a>
        </nav>
    </header>

    <form action="../controllers/update_ctrl.php" method="post">
        <input type="text" name="update" id="update" readonly style="display:none;" value="<?php echo $_GET['id'] ?>">
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" value="<?php echo $l['titre']?>">
        
        <label for="ISBN">ISBN</label>
        <input type="text" name="ISBN" id="ISBN" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="50" value="<?php echo $l['ISBN']?>">
        
        <label for="resume">Résumé</label>
        <input type="text" name="resume" id="resume" value="<?php echo $l['resume']?>">

        <input type="submit" namevalue="Envoyer">
    </form>
</body>
</html>