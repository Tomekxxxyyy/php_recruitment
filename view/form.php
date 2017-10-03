
<h1>Konwerter temperatury</h1>
<form action = "index.php" method = "POST">
    <h2>Podaj jedostkę wejściową</h2>
    <input type="radio" name="input_unit" value="celsius" checked> Skala Celsjusza<br>
    <input type="radio" name="input_unit" value="fahrenheit"> Skala Fahrenheita<br>
    <input type="radio" name="input_unit" value="kelvin"> Skala Kelvina
    <h2>Podaj wartość wejściową</h2>
    <input type = "text" name = "input_value">
    <h2>Podaj jednostkę wyjściową</h2>
    <input type="radio" name="output_unit" value="celsius" checked> Skala Celsjusza<br>
    <input type="radio" name="output_unit" value="fahrenheit"> Skala Fahrenheita<br>
    <input type="radio" name="output_unit" value="kelvin"> Skala Kelvina
    <p>
    <input type = "submit" name = "convert" value = "Przelicz">
    </p>
</form>

