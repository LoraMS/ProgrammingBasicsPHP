<form method="get">
    <div>
        <input name="a" type="text"/>
        <input name="b" type="text"/>
        <select name="operation">
            <option name="sum" value="sum">+</option>
            <option name="subtract" value="subtract">-</option>
            <option name="multiply" value="multiply">*</option>
            <option name="divide" value="divide">/</option>
        </select>
        <input type="submit" value="Calculate" name="calculate">
    </div>
</form>
<br/>
<div>
    = <input name="result" value="<?= $output[0]; ?>">
</div>