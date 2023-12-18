<?php
    require_once './assets/fonction/db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/style/main.css">
    <title>CRUD</title>
</head>
<body>
    <header>
        <h1>LIVRES</h1>
        <nav>
            <a href="./index.php">Index</a>
            <a href="./views/create.php">Creation</a>
            <a href="./views/read.php">Liste</a>
        </nav>
        
    </header>

    <form method="post" class="listeindex">
        <table>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>ISBN</th>
                <th>Résumé</th>
                <th>Actions</th>
            </tr>

            <?php
                $livre = $bdd->prepare('SELECT * FROM livre');
                $livre->execute();
                $livre = $livre->fetchAll(PDO::FETCH_CLASS);

                if (!empty($livre)) {
                    foreach ($livre as $l) {
                        echo '<tr>';

                        foreach ($l as $c) {
                            echo "<td>$c</td>";
                        }
                        echo '<td>
                                <button formaction="./controllers/delete_ctrl.php" name="delete" value="' . $l->id . '">Supprimer</button>
                                <button name="update" value="' . $l->id . '">Modifier</button>
                            </td>'; 
                        
                        echo '</tr>';
                    }
                }

                if (isset($_POST) && !empty($_POST)) {
                    if (!empty($_POST['update'])) {
                        header("Location: ./views/update.php?id=" . $_POST['update']);
                    }
                }
            ?>
        </table>
    </form>
</body>
</html>