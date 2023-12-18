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
            <th>Contact</th>
            <th>Description</th>
            <th>Software Id</th>
            <th>Bug Id</th>
        </tr>

    <?php
        $component = $bdd->prepare('SELECT * FROM component');
        $component->execute();
        $component = $component->fetchAll(PDO::FETCH_CLASS);

        if (!empty($component)) {
            foreach($component as $ligne) {
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