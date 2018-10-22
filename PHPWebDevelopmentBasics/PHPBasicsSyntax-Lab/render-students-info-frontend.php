<form method="get">
    <div>
        <label for="delimiter">Delimiter:</label>
        <select id="delimiter" name="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        <label for="names">Names</label>
        <input type="text" name="names" id="names"/>
    </div>
    <div>
        <label for="ages">Ages</label>
        <input type="text" name="ages" id="ages"/>
    </div>
    <?php if (isset($names, $ages)) : ?>
        <table border="1" cellpadding="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($names); $i++): ?>
                    <tr>
                        <?php if($ages[$i] >= 18): ?>
                        <td><?= $names[$i]; ?></td>
                        <td><?= $ages[$i]; ?></td>
                        <?php endif; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <div>
        <input type="submit" name="filter" value="Filter"/>
    </div>
</form>
