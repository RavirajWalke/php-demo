<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $age = array("Peter"=>"37", "Ben"=>"35", "Joe"=>"43");
        echo 'Before Sorting :'."<br>";
        foreach($age as $x=>$x_age)
            echo "Age of ".$x." is : ".$x_age."<br>";
        asort($age);
        echo "<br>"."<br>".'After Sorting in ascending order according to value:'."<br>";
        foreach($age as $x=>$x_age)
            echo "Age of ".$x." is : ".$x_age."<br>";
        ksort($age);
        echo "<br>"."<br>".'After Sorting in ascending order according to key:'."<br>";
        foreach($age as $x=>$x_age)
            echo "Age of ".$x." is : ".$x_age."<br>";
        arsort($age);
        echo "<br>"."<br>".'After Sorting in descending order according to value:'."<br>";
        foreach($age as $x=>$x_age)
            echo "Age of ".$x." is : ".$x_age."<br>";
        krsort($age);
        echo "<br>"."<br>".'After Sorting in descending order according to key:'."<br>";
        foreach($age as $x=>$x_age)
            echo "Age of ".$x." is : ".$x_age."<br>";
        ?>
    </body>
</html>
