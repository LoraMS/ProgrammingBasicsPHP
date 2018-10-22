<form method="get">
    <div>
        <label for="categories">
            Categories:
            <input type="text" id="categories" name="categories"/>
        </label>
    </div>
    <div>
        <label for="tags">
            Tags:
            <input type="text" id="tags" name="tags"/>
        </label>
    </div>
    <div>
        <label for="months">
            Months:
            <input type="text" name="months" id="months"/>
        </label>
    </div>
    <div>
        <input type="submit" name="generate" value="Generate">
    </div>
</form>
<?php
if(isset($_GET['generate'])){
    $categories = explode(", ", trim($_GET['categories']));
    $tags = explode(", ", trim($_GET['tags']));
    $months = explode(", ", trim($_GET['months']));

    echo "<h3>Categories</h3>";
    generateList($categories);
    echo "<h3>Tags</h3>";
    generateList($tags);
    echo "<h3>Months</h3>";
    generateList($months);
}

function generateList($arr){
    echo "<ul>";
    for($i = 0; $i < count($arr); $i++){
        $element = $arr[$i];
        echo "<li>$element</li>";
    }
    echo "</ul>";
}