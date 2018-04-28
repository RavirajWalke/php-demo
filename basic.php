<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo "Hello PHP";
        //arithmetic operation
        $a=10;
        $b=20;
        $c=$a+$b;
        echo "<br>".$c;
        //comments
        $x = 5 /* + 15 */ + 5;
        echo "<br>".$x;
        //datatypes
        $word="PHP";
        echo "<br>I Love $word";
        //static variable
        function myfun()
        {
            static $y=0;
            echo "<br>".$y;
            $y++;
        }
        myfun();
        myfun();
        //more than one parameter to echo
        echo "<br>This ", "string ", "was ", "made ", "with multiple parameters.";
        //constant, are global can be used anywhere
        define("GREETING", "Welcome to W3Schools.com!", true);
        echo greeting;
        //function with two arguments
        function familyName($fname, $year) {
         echo "<br>$fname Refsnes. Born in $year";
        }
        familyName("Hege", "1975");
        familyName("Stale", "1978");
        familyName("Kai Jim", "1983");
        //Array Sorting
        $arr1=array(4,3,5,2,1);
        //ascending order
        echo "<br> ascending order";
        sort($arr1);
        foreach($arr1 as $p)
        {
            echo "<br>$p";
        }
        //descending order
        echo "<br> descending order";
        rsort($arr1);
        foreach($arr1 as $p)
        {
            echo "<br>$p";
        }
        //associative array 
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        //sorting according to value
        asort($age);
        foreach($age as $p=>$p_val)
        {
            echo "<br>$p $p_val";
        }
        ?>
    </body>
</html>
