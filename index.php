<?php
require_once __DIR__ . '/models/ProductionClass.php';
require_once __DIR__ .'/models/SerieClass.php';

$serie1 = new Serie('The Good Doctor', 'English', 9, 6);
$serie2 = new Serie('Clannad', 'Japanese', 10, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container">
        <ul>
            <h1>Productions</h1>

            <!-- stampa dei list item con funzione -->
            <?php 
                echo $serie1->toListItem();
                echo $serie2->toListItem();
            ?>
        </ul>
    </div>
</body>
</html>