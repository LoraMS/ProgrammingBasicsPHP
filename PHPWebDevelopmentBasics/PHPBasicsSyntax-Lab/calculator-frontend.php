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
    <?php if(isset($result)) : ?>
    <div>Result:
        <input type="text" disabled readonly value="<?= $result; ?>">
    </div>    
        <?php endif; ?>
    <div><input type="submit" name="calculate" value="Calculate"/></div>
</form>