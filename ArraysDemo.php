<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $arr=array("ram","shyam","ravi","avi");
        $n=count($arr);
        for($i=0;$i<$n;$i++)
        {
            echo $arr[$i]."<br>";
        }
        echo "I love ".$arr[0]." ".$arr[1]." ".$arr[2]." ".$arr[3];
        ?>
    </body>
</html>
