<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        function myfun($x='RAVIRAJ',$y='WALKE')
        {
            //$name="RAVIRAJ WALKE";
            echo $x." ".$y."<br>";
            //echo "<br>";
        }
        function myfun1($a,$b)
        {
            return $a+$b;
        }
        myfun();
        $name='PRATHVIRAJ';
        myfun($name,"PATIL");
        echo "sum of 10 and 20 is:".myfun1(10,20);
        ?>
    </body>
</html>
