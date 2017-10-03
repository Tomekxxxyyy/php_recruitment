<?php
namespace classes\temperature;

abstract class Temperature{
    abstract function convert($target);
    abstract function validate();
}
?>