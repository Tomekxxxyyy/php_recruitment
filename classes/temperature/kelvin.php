<?php
namespace classes\temperature;

class Kelvin extends Temperature{
    private $value;
    
    public function __construct($value){
        $this->value = $value;
    }
    
    public function convert($target) {
        switch($target){
            case "celsius";
                return $this->value - 273.15;
                break;
            case "fahreinheit";
                return $this->value * 9/5 -459.67;
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
