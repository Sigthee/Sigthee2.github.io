<?php
    require_once './function/db.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/style.css">
    <title>Application</title>
</head>
<body>
    <header>
        <nav>
            <a href="./index.php">Software</a>
            <a href="./page/component.php">Component</a>
            <a href="./page/package.php">Package</a>
            <a href="./page/bug.php">Bug</a>
            <a href="./page/symptoms.php">Symptoms</a>
            <a href="./page/attachement.php">Attachements</a>
            <a href="./page/platform.php">Platform</a>
        </nav>
    </header>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Version</th>
            <th>Description</th>
            <th>Bug Id</th>
        </tr>

    <?php
        $software = $bdd->prepare('SELECT * FROM software');
        $software->execute();
        $software = $software->fetchAll(PDO::FETCH_CLASS);

        if (!empty($software)) {
            foreach($software as $ligne) {
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