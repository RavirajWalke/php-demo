<?php 
if($_SERVER["REQUESTMETHOD"]="POST")
{
    $NameErr=$EmailErr=$WebErr=$GendErr="";
    $name=$email=$web=$comment=$gender="";
    if(empty($name))
        echo "name is required";
    else
        $name=get_input($_POST["name"]);
    if(empty($email))
        echo "Email is required";
    else
        $email=get_input($_POST["email"]);
    if(empty($web))
        $web="";
    else
        $web=get_input($_POST["web"]);
    if(empty($comment))
        $comment="";
    else
        $comment=get_input($_POST["Comment"]);
    if(empty($gender))
        echo "Gender is Required";
    $gender=get_input($_POST["gender"]);
}
function get_input($data)
{
    $data=trim($data);
    $data= stripslashes($data);
    $data=  htmlspecialchars($data);
    return $data;
}
?>