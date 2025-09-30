<!DOCTYPE html>
<html lang = "en"> 
    <head> 
        <meta charset = "UTF-8" >  
        <title> My Website</title>
    </head>
    <body>  
        <h1>The first php</h1>
        <?php 
            include 'sum.php';
            include 'swap.php';
            include 'min.php';
            $a =5;
            $b =8;
            $c =9;
            echo "sum of $a and $b is :". sum($a,$b);
            swap($a,$b);
            echo "<br/>After swap: a = $a , b = $b";
            $m = min($a,$b,$c);
            echo "<br/>Minimum of $a , $b , $c is : $m";
        ?>
    </body>
</html>