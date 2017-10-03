<?php
include "view/header.php";
include "view/form.php";

spl_autoload_register();
set_exception_handler("myExceptionHandler");

$output_value = "";

if(isset($_POST["convert"])){
    $input_unit = $_POST["input_unit"];
    $input_value = $_POST["input_value"];
    $output_unit = $_POST["output_unit"];
        
    $factory = new classes\Factory($input_unit, $input_value);
    $temperature = $factory->temperatureFactory();
    
    $validator = new classes\Validator($temperature);
    $validator->validate();
        
    $converter = new classes\Converter($temperature, $output_unit);
    $output_value = $converter->convert();
}

echo "Przeliczona wartość z $input_unit na $output_unit = $output_value";
function myExceptionHandler($exception){
    echo $exception->getMessage();
}

include "view/footer.php";
?>