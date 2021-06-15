<?php
class User {
    public $name;
    public $surname;
    public $address;

    public function setName($value) {
        //controllo: si possono escludere caratteri indesiderati
        $this->name = $value;
        
    }

    public function getName() {
        return $this->name;
    }

    public function setSurname($value) {
        //controllo: si possono escludere caratteri indesiderati
        $this->surname = $value;
        
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setAddress($street, $number, $city, $cap) {

        $this->address = "Via {$street}, numero {$number}, {$city}, {$cap}";
        
    }

    public function getAddress() {
        return $this->address;
    }
}



?>