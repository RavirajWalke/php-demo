        <?php
        // put your code here
        $x=10;$y=20;
        function myfun()
        {
            $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
        }
        myfun();
        echo 'Addition of x and y is : '.$z;
        ?>
    