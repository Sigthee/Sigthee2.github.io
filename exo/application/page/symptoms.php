<?php
    require_once '../function/db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <title>Application</title>
</head>
<body>
    <header>
        
        <?php
            require_once '../function/nav.php';
        ?>

    </header>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Keyword</th>
            <th>Description</th>
        </tr>

    <?php
        $symptoms = $bdd->prepare('SELECT * FROM bug');
        $symptoms->execute();
        $symptoms = $symptoms->fetchAll(PDO::FETCH_CLASS);

        if (!empty($symptoms)) {
            foreach($symptoms as $ligne) {
                echo '<tr>';

                foreach($ligne as $colonne) {
                    echo "<td>$colonne</td>";
                }

                echo '</tr>';
            }
        }
    ?>

    </table>
</body>
</html>