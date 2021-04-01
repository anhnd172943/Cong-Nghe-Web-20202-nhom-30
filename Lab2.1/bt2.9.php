<html>
    <head>
        <meta charset="UTF-8">
        <title>BT2.9</title>
    </head>
    <body>
        <font size=5>Cập nhật thành công</font>
        <?php
            $name = $_POST['name'];
            print ("<br><br>Họ và tên: $name");

            $birth = $_POST['date'];
            print ("<br>Ngày sinh: $birth");

            $tel = $_POST['tel'];
            print ("<br>Số điện thoại: $tel");

            $email = $_POST['email'];
            print ("<br>Email: $email");
            
            $school = $_POST['school'];
            print ("<br>School: $school");
            
            $class = $_POST['class'];
            print ("<br>Class: $class");
            
            print ("<br>Sở thích của bạn: ");
            foreach($_POST['hobby'] as $hobby){
                print ("$hobby, "); 
            }print ("...");
        ?>
    </body>
</html>
