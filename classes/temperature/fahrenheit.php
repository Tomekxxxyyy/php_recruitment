<?php
namespace classes\temperature;

class Fahreinheit extends Temperature{
    private $value;
    
    public function __construct($value){
        $this->value = $value;
    }
    
    public function convert($target) {
        switch($target){
            case "celsius";
                return ($this->value - 32) / 1.8;
                break;
            case "kelvin";
                return ($this->value + 459.67) * 5/9;
                break;
            default:
                throw new Exception("Brak podanej jednostki temperatury");
        }
    }

    public function validate() {
        if(trim($this->value) == ""){
            throw new Exception("Pole nie może być puste");
        }
    }

}
?>

