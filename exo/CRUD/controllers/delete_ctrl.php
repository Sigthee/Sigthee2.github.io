<?php
    require_once '../assets/fonction/db.php';

    if (isset($_POST) && !empty($_POST)) {
        $delete = $bdd->prepare('DELETE FROM livre WHERE id=?');
        $delete->execute(array(
            $_POST['delete']
        ));
    }
    header('Location: ../index.php');
?>