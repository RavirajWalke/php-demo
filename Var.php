<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $a=10;$b=20;
function myfun()
{
    global $a,$b;
    $b=$a+$b;
}
myfun();
echo $b;
        ?>
    </body>
</html>