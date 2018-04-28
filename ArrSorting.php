<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $a=array(20,10,40,30,50,0);
        echo 'Before Sorting :'."<br>";
        foreach($a as $x)
            echo $x." ";
        sort($a);
        echo "<br>".'After Sorting in ascending order :'."<br>";
        foreach($a as $x)
            echo $x." ";
        rsort($a);
        echo "<br>".'After Sorting in descending order :'."<br>";
        foreach($a as $x)
            echo $x." ";
        ?>
    </body>
</html>
