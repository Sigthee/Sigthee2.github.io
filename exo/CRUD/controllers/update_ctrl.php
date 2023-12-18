<?php
    require_once '../assets/fonction/db.php';

    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM livre WHERE id=?');
        $select->execute(array(
            $_POST['update']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);

        $update = $bdd->prepare('UPDATE livre SET titre=?, ISBN=?, resume=? WHERE id=?');
        $update->execute(array(
            $_POST['titre'],
            $_POST['ISBN'],
            $_POST['resume'],
            $_POST['update']
        ));
        header('Location: ../index.php');
    }
?>