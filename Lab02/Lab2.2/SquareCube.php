
<html>
    <head>
        <title>Square and Cube</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <font size="5" color="blue"> Generate Square and Cube Values </font>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
            if (array_key_exists("start", $_GET)){
                    $start = $_GET["start"];
                    $end = $_GET["end"];
            } else {
                $start = 0; $end = 0;
            }
            ?>
            <table>
                <tr>
                    <td>Select start number:</td>
                    <td>
                        <select name="start">
                            <?php
                            for ($i = 0; $i <= 10; $i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Select end number:</td>
                    <td>
                        <select name="end">
                            <?php
                            for ($i = 0; $i <= 20; $i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="SUBMIT" value="Submit">
                    </td>
                    <td align="left">
                        <input type="RESET" value="Reset">
                    </td>
                </tr>
            </table>
            <table>
                <tr><th>Number</th><th>Square</th><th>Cube</th></tr>
                <?php
                if (array_key_exists("start", $_GET)){
                    $i = $start;
                    while ($i <= $end){
                        $sqr = $i*$i;
                        $cubeb = $i*$i*$i;
                        print "<tr><td>$i</td><td>$sqr</td><td>$cubeb</td></tr>";
                        $i = $i + 1;
                    }
                }
                ?>
            </table>
        </form>
    </body>
</html>
