
<html>
    <head>
        <title>Date Time Processing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <font size="5" color="blue"> Date Time Processing </font>
        <p>Enter your name and select date and time for appointment</p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <table>
                 <tr>
                    <td>Your Name: </td>
                    <td>
                        <input type="text" size="20" maxlength="20" name="name">
                    </td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td>
                        <table>
                            <td>
                        <select name="day">
                            <?php
                            for ($i = 1; $i <= 31; $i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="month">
                            <?php
                            for ($i = 1; $i <= 12; $i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="year">
                            <?php
                            for ($i = 2021; $i >= 0; $i--){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Time:</td>
                    <td>
                        <table>
                            <td>
                        <select name="hour">
                            <?php
                            for ($i = 0; $i <= 23; $i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="min">
                            <?php
                            for ($i = 0; $i <= 60; $i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="sec">
                            <?php
                            for ($i = 0; $i <= 60; $i++){
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                        </table>
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
                <?php
                if (array_key_exists("start", $_GET)){
                    $start = $_GET["start"];
                    $end = $_GET["end"];
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
            
            <?php
           if (array_key_exists("name", $_GET)){
                $name = $_GET["name"];
                print ("Hi $name! <br></br>");
                print ("<br></br>");
           }
           
           if (array_key_exists("day", $_GET)){
               $day = $_GET["day"];
               $month = $_GET["month"];
               $year = $_GET["year"];
               $hour = $_GET["hour"];
               $min = $_GET["min"];
               $sec = $_GET["sec"];
               print ("You have choose an appointment on $hour:$min:$sec, $day/$month/$year");
               print ("<br></br>");
               print ("More Information<br></br>");
               if ($hour >12){
                   $i = $hour - 12;
                   print ("In 12 hours, the time and date is $i:$min:$sec PM");
               } else {
                   print("In 12 hours, the time and date is $hour:$min:$sec AM");
               }
               print ("<br></br>");
               if ($month == 1 or  $month == 3 or  $month == 5 or  $month == 7 or  $month == 8 or  $month == 10 or  $month == 12){
                   $daynumber = 31;
               }
               elseif ($month == 4 or  $month == 6 or  $month == 9 or  $month == 11){
                   $daynumber = 30;
               }
               else {
                   if ($year % 4 == 0 and $year % 100 != 0){
                       $daynumber = 29;
                   }
                   elseif ($year % 400 == 0){
                       $daynumber = 29;
                   } else {
                       $daynumber = 28;
                   }
                   
               }
               
               print ("This month has $daynumber days");
               
           }
           
           
            ?>
            
        </form>
    </body>
</html>
