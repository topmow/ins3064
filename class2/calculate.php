<!DOCTYPE html>
<html lang = "en"> 
    <head> 
        <meta charset = "UTF-8" >  
        <title> My Website</title>
    </head>
    <body>  
        <h1>The first php</h1>
        <?php
            $x =10;
            $y =11;
            echo "x : " . $x ."<br/>";
            echo "y : " . $y ."<br/>";
            echo "x/y : " . ($x/$y) ."<br/>";
            echo "x%y : " . ($x%$y) ."<br/>";
            echo "x++ : " . ($x++) ."<br/>";
            echo "++y : " . (++$y) ."<br/>";
        ?>
    </body>
</html>