<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $t=  date("H");
        echo $t;
        echo "<br>";
         if($t>=6 and $t<12)
             echo "have a good morning";
         elseif($t<18)
             echo "have a good afternoon";
         else
             echo "have a good night";
        ?>
    </body>
</html>
