<?php
namespace classes;

class Converter{
    private $temperature;
    private $target;
    
    public function __construct($temperature, $target){
        $this->temperature = $temperature;
        $this->target = $target;
    }
    
    function convert(){
        return $this->temperature->convert($this->target);
    }
    
    function getTemperature() {
        return $this->temperature;
    }

    function setTemperature($temperature) {
        $this->temperature = $temperature;
    }
    
    function getTarget() {
        return $this->target;
    }

    function setTarget($target) {
        $this->target = $target;
    }


}
?>

