<style>
    table{
        border-collapse: collapse;
    }
    table, td{
        border: 1px solid black;
        padding: 10px 10px 10px 5px;
    }
    table tr td:nth-child(2){
        text-align: end;
    }
    table tr td:first-child{
        font-weight: bold;
        background-color: orange;
    }
</style>

<?php

$name = 'Gosho';
$phone = '0882-321-423';
$age = 24;
$address = 'Hadji Dimitar';

?>

<table>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><?php echo $phone; ?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?php echo $age; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>
