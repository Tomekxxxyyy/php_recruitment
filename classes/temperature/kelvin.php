<?php
namespace classes\temperature;

class Kelvin extends Temperature{
    private $value;
    
    public function __construct($value){
        $this->value = $value;
    }
    
    function getValue() {
        return $this->value;
    }

    function setValue($value) {
        $this->value = $value;
    }
        
    public function convert($target) {
        switch($target){
            case "celsius";
                return $this->value - 273.15;
                break;
            case "fahrenheit";
                return $this->value * 9/5 -459.67;
                break;
            default:
                throw new \Exception("Próbujesz przeliczyć te same jednostki");
        }
    }

    public function validate() {
        parent::validate();
        if($this->value < 0){
            throw new \Exception("Skala stopni Kelvina nie może być niższa niż 0");
        }   
    }

}
?>
