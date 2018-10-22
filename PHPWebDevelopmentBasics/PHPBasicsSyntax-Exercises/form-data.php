<form method="get">
    <div>
<!--        <label for="name">Name:</label>-->
        <input type="text" id="name" name="name" placeholder="Name" required>
    </div>
    <div>
<!--        <label for="age">Age:</label>-->
        <input type="text" id="age" name="age" placeholder="Age" required>
    </div>
    <div>
        <input type="radio" name="gender" value="male"/> Male
    </div>
    <div>
        <input type="radio" name="gender" value="female"/>Female
    </div>
    <div>
        <input type="submit" value="Submit" name="submit">
    </div>
</form>

<?php
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    echo "My name is $name. I am $age years old. I am $gender.";
}