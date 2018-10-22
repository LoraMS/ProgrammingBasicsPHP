<form method="get">
    <div>
        <label for="operation">Operation:</label>
        <select id="operation" name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1">
    </div>
    <div>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2">
    </div>
    <div><input type="submit" name="calculate" value="Calculate"></div>
</form>

<?php
//var_dump($_GET);
if(isset($_GET['calculate'])){
    $operation = $_GET['operation'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if($operation == 'sum'){
        echo "== ".($num1 + $num2);
    } elseif ($operation == 'subtract'){
        echo "== ".($num1 - $num2);
    } else{
        echo "== Invalid operation supplied";
    }
}