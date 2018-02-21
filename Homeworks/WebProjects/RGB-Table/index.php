<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        table * {
            border: 1px solid #000;
            width: 50px;
            height: 50px;
        }
        .dark, .light, .gray{
            float: left;
            margin-right: 20px;
        }
    </style>
    <body>
        <div>
            <table class="dark">
                <thead>
                    <tr>
                        <th>Red</th>
                        <th>Green</th>
                        <th>Blue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($index = 51; $index <= 255; $index = $index + 51): ?>
                        <?php
                        $styleR = "background-color: rgb(" . $index . ", 0, 0);";
                        $styleG = "background-color: rgb(0, " . $index . ", 0);";
                        $styleB = "background-color: rgb(0, 0, " . $index . ");";
                        ?>
                        <tr>
                            <td style="<?php echo $styleR; ?>"></td>
                            <td style="<?php echo $styleG; ?>"></td>
                            <td style="<?php echo $styleB; ?>"></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <table class="light">
                <thead>
                    <tr>
                        <th>Red</th>
                        <th>Green</th>
                        <th>Blue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($index = 51; $index <= 255; $index = $index + 51): ?>
                        <?php
                        $styleR = "background-color: rgb(" . $index . ", 255, 255);";
                        $styleG = "background-color: rgb(255, " . $index . ", 255);";
                        $styleB = "background-color: rgb(255, 255, " . $index . ");";
                        ?>
                        <tr>
                            <td style="<?php echo $styleR; ?>"></td>
                            <td style="<?php echo $styleG; ?>"></td>
                            <td style="<?php echo $styleB; ?>"></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <table class="gray">
                <thead>
                    <tr>
                        <th>Red</th>
                        <th>Green</th>
                        <th>Blue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($index = 51; $index <= 255; $index = $index + 51): ?>
                        <?php
                        $styleR = "background-color: rgb(" . $index . ", " . $index . ", " . $index . ");";
                        $styleG = "background-color: rgb(" . $index . ", " . $index . ", " . $index . ");";
                        $styleB = "background-color: rgb(" . $index . ", " . $index . ", " . $index . ");";
                        ?>
                        <tr>
                            <td style="<?php echo $styleR; ?>"></td>
                            <td style="<?php echo $styleG; ?>"></td>
                            <td style="<?php echo $styleB; ?>"></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <table class="mixed">
                <thead>
                    <tr>
                        <th>Red</th>
                        <th>Green</th>
                        <th>Blue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($index = 51; $index <= 255; $index = $index + 51): ?>
                        <?php
                        $styleR = "background-color: rgb(" . $index . ", " . $index . ", " . $index . ");";
                        $styleG = "background-color: rgb(" . $index . ", " . (2*$index) . ", " . $index . ");";
                        $styleB = "background-color: rgb(" . $index . ", " . (4*$index) . ", " . $index . ");";
                        ?>
                        <tr>
                            <td style="<?php echo $styleR; ?>"></td>
                            <td style="<?php echo $styleG; ?>"></td>
                            <td style="<?php echo $styleB; ?>"></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
