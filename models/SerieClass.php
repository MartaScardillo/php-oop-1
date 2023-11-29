<?php
require_once __DIR__ . '/ProductionClass.php';
class Serie extends Production {
    public $season;

    public function __construct(String $_title, String $_language, int $_rating, int $_season) {
        parent::__construct($_title, $_language, $_rating);
        $this->season = $_season;
    }

    public function getSeason() {
        return $this->season;
    }

    public function setSeason($_season) {
        $this->season = $_season;
    }

}
?>