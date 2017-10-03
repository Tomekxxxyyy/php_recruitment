<?php
namespace classes\temperature;

class Fahrenheit extends Temperature{
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
                return ($this->value - 32) / 1.8;
                break;
            case "kelvin";
                return ($this->value + 459.67) * 5/9;
                break;
            default:
                throw new \Exception("Próbujesz przeliczyć te same jednostki");
        }
    }

    public function validate() {
        parent::validate();
        if($this->value < -459.67){
            throw new \Exception("Skala stopni fahrenheita nie może być niższa niż -459.67");
        }   
    }

}
?>

