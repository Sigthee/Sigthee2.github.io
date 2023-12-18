<?php
    require_once '../assets/fonction/db.php';


    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM livre WHERE (ISBN=?)');
        $select->execute(array(
            $_POST['ISBN']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        
        if (empty($select)) {
            $insert = $bdd->prepare('INSERT INTO livre (titre, ISBN, resume) VALUES (?, ?, ?)');
            $insert->execute(array(
                $_POST['titre'],
                $_POST['ISBN'],
                $_POST['resume']
            ));
            header('Location: ../index.php');
        } else {
            header('Location: ../index.php');
        }
    }
?>