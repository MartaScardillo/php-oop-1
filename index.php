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

    public function setTitle($_title) {
        $this->title = $_title;
    }
}

$prod1 = new Production('The Good Doctor', 'English', '9/10');
$prod2 = new Production('Clannad', 'Japanese', 'Pianto isterico/10');

echo $prod1->getTitle();
echo $prod1->language;

echo $prod2->getTitle();
echo $prod2->language;
?>
