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
        <input type="number" name="num1" id="num1"/>
    </div>
    <div>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2"/>
    </div>
<!--    <div><input type="submit" name="calculate" value="Calculate"/></div>-->
<!--</form>-->

<?php
if(isset($_GET['calculate'])){
    $operation = $_GET['operation'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

//    echo "<ul>";
//    if($operation == 'sum'){
//        echo " <li style='color:blue'>".($num1 + $num2)."</li>";
//    } elseif ($operation == 'subtract'){
//        echo " <li style='color:green'>".($num1 - $num2)."</li>";
//    } else{
//        echo " <li style='color:red'>Invalid operation supplied</li>";
//    }
//    echo "</ul>";

    echo "<div>Result: ";
    if($operation == 'sum'){
        echo "<input type='text' disabled readonly value='".($num1 + $num2)."'/>";
    } elseif ($operation == 'subtract'){
        echo " <input type='text' disabled readonly value='".($num1 - $num2)."'/>";
    } else{
        echo " <input type='text' disabled readonly value='Invalid operation supplied' />";
    }
    echo "</div>";
}

?>

<div><input type="submit" name="calculate" value="Calculate"/></div>
</form>