<?php
namespace classes;

class Converter{
    private $temperature;
    
    public function __construct(Temperature $temperature){
        $this->temperature = $temperature;
        $this->validate();
        $this->convert();
    }
    
    function getTemperature() {
        return $this->temperature;
    }

    function setTemperature($temperature) {
        $this->temperature = $temperature;
    }

}
?>

