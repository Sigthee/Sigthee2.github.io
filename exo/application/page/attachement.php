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
            <th>Author</th>
            <th>Author</th>
            <th>Owner</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Resolvde</th>
            <th>Severity</th>
            <th>Status</th>
            <th>Summary</th>
            <th>Description</th>
        </tr>

    <?php
        $bug = $bdd->prepare('SELECT * FROM bug');
        $bug->execute();
        $bug = $bug->fetchAll(PDO::FETCH_CLASS);

        if (!empty($bug)) {
            foreach($bug as $ligne) {
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