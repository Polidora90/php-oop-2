<?php
class User {
    public $name;
    public $surname;
    public $address;

    function __construct($name, $surname, $street, $number, $city, $cap) {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setAddress($street, $number, $city, $cap);
    }
   
    public function setName($value) {
        $this->name = $value;
        
    }

    public function getName() {
        return $this->name;
    }

    public function setSurname($value) {
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