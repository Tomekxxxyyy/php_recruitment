<div class="container">
    
    <div class = "page-header">
    <h1>Konwerter temperatury</h1>
    </div>
    
    <div class = "well">  
        <form action = "index.php" method = "POST">
            <h2>Podaj jednostkę wejściową</h2>
            <div class = "radio">
                <label><input type="radio" name="input_unit" value="celsius" checked> Skala Celsjusza</label>
            </div>
            <div class ="radio">    
                <label><input type="radio" name="input_unit" value="fahrenheit"> Skala Fahrenheita</label>
            </div>
            <div class = "radio">    
                <label><input type="radio" name="input_unit" value="kelvin"> Skala Kelvina</label>
            </div>
            <h2>Podaj wartość wejściową</h2>
            <input maxlength = "15" type = "text" name = "input_value">
            <h2>Podaj jednostkę wyjściową</h2>
            <div class = "radio">
                <label><input type="radio" name="output_unit" value="celsius" checked> Skala Celsjusza</label>
            </div>
            <div class = "radio">    
                <label><input type="radio" name="output_unit" value="fahrenheit"> Skala Fahrenheita</label>
            </div>
            <div class = "radio">
                <label><input type="radio" name="output_unit" value="kelvin"> Skala Kelvina</label>
            </div>
            <p>
                <button class="btn btn-warning" type = "submit" name = "convert">Przelicz</button>
            </p>
        </form>
    </div>
    <?php
    echo $output_info;
    echo $output_warning;
    ?>

