<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $age=array("Ram"=>"32","shyam"=>"29","Ravi"=>"20","Avi"=>"21");
         //echo "Age of Avi is:".$age['Avi'];
         foreach ($age as $x=>$x_age)
         {
             echo "Name=".$x."   Age=".$x_age;
             echo "<br>";
         }
        ?>
    </body>
</html>
