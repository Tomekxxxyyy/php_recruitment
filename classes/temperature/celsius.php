<?php
namespace classes\temperature;

class Celsius extends Temperature{
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
            case "fahrenheit";
                return $this->value * 1.8 +32;
                break;
            case "kelvin";
                return $this->value + 273.15;
                break;
            default:
                throw new \Exception("Próbujesz przeliczyć te same jednostki");
        }
    }

    public function validate() {
        parent::validate();
        if($this->value < -273.15){
            throw new \Exception("Skala stopni Celsjusza nie może być niższa niż -273.15");
        }        
    }

}
?>

