<?php
namespace classes;

class Validator{
    private $temperature;
    static $exception;
    
    public function __construct($temperature){
        $this->temperature = $temperature;
    }
        
    function getTemperature() {
        return $this->temperature;
    }

    function setTemperature($temperature) {
        $this->temperature = $temperature;
    }
    
    public function validate(){
        $this->temperature->validate();
    }    
}
?>

