<?php
include "view/header.php";
spl_autoload_register();

set_exception_handler("myExceptionHandler");

function myExceptionHandler(Throwable $throwable){
    echo "Wystapił nienznany błąd ". $throwable->getMessage();
}

$output_info = "";
$output_warning = "";

if(isset($_POST["convert"])){
    try{
        $input_unit = $_POST["input_unit"];
        $input_value = $_POST["input_value"];
        $output_unit = $_POST["output_unit"];

        $factory = new classes\Factory($input_unit, $input_value);
        $temperature = $factory->temperatureFactory();

        $validator = new classes\Validator($temperature);
        $validator->validate();

        $converter = new classes\Converter($temperature, $output_unit);
        $output_value = $converter->convert();
        
        $output_info = "<div class='alert alert-success'>Przeliczona wartość z $input_unit na $output_unit = $output_value</div>";
    }
    catch(Exception $ex){
        $output_warning = "<div class='alert alert-success'>".$ex->getMessage()."</div>";
    }
}

include "view/form.php";
include "view/footer.php";
?>