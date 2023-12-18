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
            echo '</tr>';
        }
    }
?>