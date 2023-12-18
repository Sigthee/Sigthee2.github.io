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
            <th>Version</th>
            <th>Maintainer</th>
            <th>Description</th>
            <th>Software Id</th>
            <th>Bug Id</th>
        </tr>

    <?php
        $package = $bdd->prepare('SELECT * FROM package');
        $package->execute();
        $package = $package->fetchAll(PDO::FETCH_CLASS);

        if (!empty($package)) {
            foreach($package as $ligne) {
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