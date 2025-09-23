<!DOCTYPE html>
<html lang = "en"> 
    <head> 
        <meta charset = "UTF-8" >  
        <title> My Website</title>
    </head>
    <body>  
        <h1>The first php</h1>
        <?php
            $name ="Mr.A";
            $age = 20;
            $course = array("PHP", "HTML", "CSS", "JavaScript");
            echo  "Name :" . $name . "age:".$age .
            "<br/>3rd course:".$course[2];
        ?>
    </body>
</html>