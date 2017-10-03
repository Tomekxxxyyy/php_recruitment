<?php
namespace classes\temperature;

abstract class Temperature{
    abstract function convert($target);
    function validate(){
        if(trim($this->getValue()) == ""){
            throw new \Exception("Pole z wartością wejściową nie może być puste");
        }
        
        if(preg_match('/\s|,/',$this->getValue())){
            throw new \Exception("Proszę nie używać spacji pomiędzy znakami, a zamiast przecinków używać kropki");
        }
        
        if(!preg_match('/[0-9]/',$this->getValue())){
            throw new \Exception("Tylko cyfry dozwolone");
        }
    }
}
?>