<!DOCTYPE html>
<html lang = "en"> 
    <head> 
        <meta charset = "UTF-8" >  
        <title> My Website</title>
    </head>
    <body>  
        <h1>The first php</h1>
        <?php
        //http://ins3064.test/class2/cal&com.php?x=5&y=8
            $x = $_GET["x"] ;
            $y = $_GET["y"] ; 
            // Arithmetic operators
            echo "x : " . $x ."<br/>";
            echo "y : " . $y ."<br/>";
            echo "x/y : " . ($x/$y) ."<br/>";
            echo "x%y : " . ($x%$y) ."<br/>";
            echo "x++ : " . ($x++) ."<br/>";
            echo "++y : " . (++$y) ."<br/>";
            // Comparison operators
            echo "x == y : " . ($x == $y) . "<br/>";
            echo "x != y : " . ($x != $y) . "<br/>";
            echo "x < y : ".($x<$y)."<br/>";
            echo "x > y : " . ($x > $y) . "<br/>";
            echo "x >= y : " . ($x >= $y) . "<br/>";
            echo "x <= y : " . ($x <= $y) . "<br/>";
        ?>
    </body>
</html>