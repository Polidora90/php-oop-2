<?php

class Payment {
    //tipologia di pagamento
    protected $type;
    protected $date;
    protected $userName;

    function __construct($type, $date, $userName) {
        $this->setType($type);
        $this->setDate($date);
        $this->setUserName($userName);
    }
   
    protected function setType($value) {
        $this->type = $value;
        
    }

    protected function getType() {
        return $this->type;
    }

    protected function setDate($value) {
        $this->date = $value;
        
    }

    protected function getDate() {
        return $this->type;
    }

    protected function setUserName($value) {
        $this->userName = $value;
        
    }

    protected function getUserName() {
        return $this->userName;
    }
}

?>