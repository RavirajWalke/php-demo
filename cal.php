<html>
    <body text="teal" bgcolor="pink">
<?php
    $num3=$_POST['angle'];
    $operator1=$_POST['Location1'];
    if($operator1=="a")
    {
        $res1=sin(deg2rad($num3));
    }
    elseif($operator1=="b")
    {
        $res1=cos(deg2rad($num3));
    }
    else
    {
        $res1=tan(deg2rad($num3));
    }
echo "<p align=center><font color=cc33cc> RESULT:<br><input type='text' value='$res1'/></font></p>";        
if( $_POST['first_num'] && $_POST['second_num'] )
{
    $num1= $_POST['first_num'];
    $num2= $_POST['second_num'];
    $operator= $_POST['Location'];
    if($operator=="+")
    {
        $res=$num1+$num2;
    }
    if($operator=="-")
    {
        $res=$num1-$num2;
    }
    if($operator=="*")
    {
        $res=$num1*$num2;
    }
    if($operator=="/")
    {   
        $res=$num1/$num2;
    }
echo "<p align=center><font color=cc33cc> RESULTA:<br><input type='text' value='$res'/></font></p>";
}
elseif ($_POST['first_num']) {
    echo "<h1 align=center><font color=red>enter second number</font></h1>";
}
else {
echo "<h1 align=center><font color=red>enter first number</font></h1>";    
}

?>
        <form action="<?php $_PHP_SELF ?>" method="POST" >
           <p align="center"><font color=cyan> FIRSE NUMBER</font><br><input type="text" name="first_num"/><br><br>            
               <font color=cyan>SECOND NUMBER</font><br><input type="text" name="second_num"/><br><br>
            <font align="center" color=maroon>SELECT ARITHMETIC OPERATION TO PERFORM!!! </font><br>
            <select name="Location">
                <option value="+">ADDITION</option>
                <option value="-">SUBTRACTION</option>
                <option value="*">MULTIPLICATION</option>
                <option value="/">DIVISION</option>
            </select><br><br>
            <font color=maroon align=center>SELECT TRIGNOMETRIC OPERATION</FONT><br>
            <select name="Location1">
                <option value="a">SIN</option>
                <option value="b">COS</option>
                <option value="c">TAN</option>
            </select><br><br>
            <font color=cyan>ENTER ANGLE(IN DEGREES)</font><br>
            <input type="number" name="angle"/><br><br>
            <input type="submit"/></p>
        </form>
        
    </body>
</html>
