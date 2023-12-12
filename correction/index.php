<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Menu Correction</title>
</head>
<body>
    <style>
        body {
            background-color: gray;
            margin: 0;
        }

        h1 {
            top : 0; right : 0; left: 0;
            background-color: #2E4053;
            color: white;
            font-size: 60px;
            margin-bottom: 400px;
            margin-top: 0;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            border-bottom: 3px solid grey;
            color: #2E86C1;
        }

        ul {
            list-style-type: none;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 50px 0;
            margin: 400px auto;
            text-align: center;
            width: 90%;
            border-radius: 15px;
            border: 4px ridge blue;
            background-color: silver;
        }

        li {
            font-size: 40px;
            padding: 10px 10px;
            margin: 40px 0;
            background-color: #404040;
            width: 10%;
            height: 150px;
            border-radius: 15px;
            border: 6px solid #2E4053;
            background-color: #000000;
        }

        li:first-child {
            border: 6px solid red;
            color: red;
        }

        a {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            color: white;
            text-decoration: none;
            font-size: 30px;
            color: white;
        }

        li:first-child a {
            color: red;
        }
    </style>

    <h1>Menu de navigation Correction</h1>
    <?php
        $dir = '../correction';
        $dossiers = scandir($dir);
        echo '<ul>';
        foreach ($dossiers as $lien) {
            if ($lien!= '.' && $lien!= '..' && $lien!= 'index.php') {
                echo "<li><a href=" . $lien . ">" . $lien ."</a></li>";
            } elseif ($lien == '..') {
                echo "<li><a href=" . $lien . ">⛔</a></li>";
            }
        }
        echo '</ul>';
    ?>
</body>
</html>