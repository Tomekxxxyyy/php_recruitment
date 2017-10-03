<?php
namespace classes;

class Factory{
    private $input_unit;
    private $input_value;

    function __construct($input_unit, $input_value){
        $this->input_unit = $input_unit;
        $this->input_value = $input_value;
    }    
    
    function getInput_unit() {
        return $this->input_unit;
    }

    function getInput_value() {
        return $this->input_value;
    }

    function setInput_unit($input_unit) {
        $this->input_unit = $input_unit;
    }

    function setInput_value($input_value) {
        $this->input_value = $input_value;
    }
    
    function temperatureFactory(){
        switch($this->input_unit){
            case "celsius":
                return new temperature\Celsius($this->input_value);
                break;
            case "fahrenheit":
                return new temperature\Fahrenheit($this->input_value);
                break;
            case "kelvin";
                return new temperature\Kelvin($this->input_value);
                break;
            default:
                throw new \Exception("Brak podanej jednostki temperatury");
        }
    }
}
?>


