<?php
require_once __DIR__ . '/ProductionClass.php';
class Movie extends Production {
    public $profit;
    public $duration;

    public function __construct(String $_title, String $_language, int $_rating, string $_profit, String $_duration) {
        parent::__construct($_title, $_language, $_rating);
        $this->profit = $_profit;
        $this->duration = $_duration;
        
    }

    public function getProfit() {
        return $this->profit;
    }
    public function setProfit($_profit) {
        $this->profit = $_profit;
    }

    public function getDuration() {
        return $this->duration;
    }
    public function setDuration($_duration) {
        $this->duration = $_duration;
    }

    

}
?>