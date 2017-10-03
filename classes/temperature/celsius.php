<?php
namespace classes\temperature;

class Celsius extends Temperature{
    private $value;
    
    public function __construct($value){
        $this->value = $value;
    }
    
    public function convert($target) {
        switch($target){
            case "fahreinheit";
                return $this->value * 1.8 +32;
                break;
            case "kelvin";
                return $this->value + 273.15;
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

