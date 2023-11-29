<?php
class Production {
    public $title;
    public $language;
    public $rating;

    function __construct(String $_title, String $_language, int $_rating) {
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

    // public function setTitle(String $_title) {
    //     $this->title = $_title;
    // }

    public function toListItem() {
        $listItem = 
                '<span>Production "' . $this->title . '"</span>' .
                '<li>Language: ' . $this->language . '</li>' .
                '<li>Rating: ' . $this->rating . '</li>';
        return $listItem;
    }
}
?>