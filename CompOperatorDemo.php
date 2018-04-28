<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $a=array("str1","str2","str3");
        $b=array("str4","str5");
        $c=$a+$b;
        $n= count($c);
        for($i=0;$i<$n;$i++)
        {
            echo $c[$i];
            echo "<br>";
        }
        ?>
    </body>
</html>
