<?php
require_once __DIR__ . '/models/ProductionClass.php';
require_once __DIR__ .'/models/SerieClass.php';
require_once __DIR__ .'/models/MovieClass.php';

$serie1 = new Serie('The Good Doctor', 'English', 9, 6);
$serie2 = new Serie('Clannad', 'Japanese', 10, 2);
$serie3 = new Serie('Grey\'s Anatomy', 'English', 10, 19);
$serie4 = new Serie('Criminal Minds', 'English', 9, 7);
$serie5 = new Serie('The Walking Dead', 'English', 7, 11);

$movie1 = new Movie('Spider-Man: No Way Home', 'English', 8, '$' . 610 . 'mil', '2h 28min');
$movie2 = new Movie('The Little Mermaid', 'English', 9, '$' . 44.6 . 'mil', '2h 15min');
$movie3 = new Movie('Free Guy', 'English', 8, '$' . 331.5 . 'mil', '1h 55min');
$movie4 = new Movie('Big Hero 6', 'English', 7, '$' . 102 . 'mil', '1h 42min');
$movie5 = new Movie('Garfield', 'English', 7, '$' . 200 . 'mil', '1h 20min');

$productions = [
    $serie1,
    $serie2,
    $serie3,
    $serie4,
    $serie5,
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5
]
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
                foreach ($productions as $production) {
                    echo
                    '<li class="prod">' .
                        '<ul>' .
                            $production->toListItem() .
                            '<li>';
                                if (isset($production->duration)) {
                                    echo 'Duration: ' . $production->duration;
                                } elseif (isset($production->season)){
                                    echo 'Seasons: ' . $production->season;
                                }
                            echo
                            '</li>' .
                        '</ul>' .
                    '</li>';
                }
            ?>
        </ul>
    </div>
</body>
</html>