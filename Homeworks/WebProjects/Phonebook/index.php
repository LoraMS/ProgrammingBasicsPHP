<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        table * {
            border: 1px solid #000;
            width: 60px;
        }
        tr.even{
            background-color: skyblue;
        }
        tr.odd{
            background-color: papayawhip;
        }
    </style>
    <body>
        <table>
            <tr>
                <th>&#8470;</th>
                <th>Name</th>
                <th>Phone Number</th>
            </tr>

            <?php
            $peopleAndPhones = [
                "Ivan 0897556783",
                "Peter 0896552341",
                "Mariya 0899456712",
                "Teodor 0897565167",
                "Boyan 0888349612",
                "Diyan 0877679435"
            ];

            function readByIndex($index, $peopleAndPhones) {
                return explode(" ", $peopleAndPhones[$index]);
            }

            for ($index = 0; $index < count($peopleAndPhones); $index++) {
                $values = readByIndex($index, $peopleAndPhones);
                
                $name = $values[0];
                $phone = $values[1];
                if ($index % 2 === 0) {
                    echo "<tr class=\"even\">"
                    . "<td>$index</td>"
                    . "<td>$name</td>"
                    . "<td>$phone</td>"
                    . "</tr>";
                } else {
                    echo "<tr class=\"odd\">"
                    . "<td>$index</td>"
                    . "<td>$name</td>"
                    . "<td>$phone</td>"
                    . "</tr>";
                }
            }
            ?>
        </table>
    </body>
</html>
