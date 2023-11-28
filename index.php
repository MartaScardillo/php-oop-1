<?php
class Production {
    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating) {
        $this->title = $_title;
        $this->language = $_language;
        $this->rating = $_rating;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getRating() {
        return $this->rating;
    }

    // public function setTitle($_title) {
    //     $this->title = $_title;
    // }


}

$prod1 = new Production('The Good Doctor', 'English', '9/10');
$prod2 = new Production('Clannad', 'Japanese', 'Pianto isterico/10');
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
            <li class="prod">
                <ul>
                    <span>Production 1</span>
                    <li><?php echo 'Title: ' . $prod1->getTitle() ?></li>
                    <li><?php echo 'Language: ' . $prod1->getLanguage() ?></li>
                    <li><?php echo 'Rating: ' . $prod1->getRating() ?></li>
                </ul>
            </li>
            <li class="prod">
                <ul>
                    <span>Production 2</span>
                    <li><?php echo 'Title: ' . $prod2->title ?></li>
                    <li><?php echo 'Language: ' . $prod2->language ?></li>
                    <li><?php echo 'Rating: ' . $prod2->rating ?></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>