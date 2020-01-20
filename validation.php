<?php
session_start();
include "database/conn.php";
$user_name=$_REQUEST['name']; 
$user_email=$_REQUEST['email']; 
$user_pass=md5($_REQUEST['pass']); 
$user_photo=$_FILES['photo']['name']; 

function valid_name ($name)
{
    if(strlen($name) >= 6 && strlen($name)<=15)
    {
        return true;
    }
    return false;
}
function valid_pass ($pass)
{
    if(strlen($pass) >= 6)
    {
        return true;
    }
    return false;
}
function valid_email ($email)
{
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    return false;
}
// ----------main function insert-----------
function saveUserdata($name,$email,$pass,$photo,$conn)
{
    $mysql="insert into user values(null,'$name','$email','$pass','$photo',0)";
    $conn -> query($mysql);
        if ($conn->errno)
        {
           return false;
        }
        else
        {
           return true;
        }
}
// --------------------------------
// --------------------------------

    if (valid_name ($user_name))
    {
        if(valid_pass ($user_pass))
        {
            if(valid_email ($user_email))
            {
                $extension= pathinfo($user_photo,PATHINFO_EXTENSION);
                $arr=array('jpg','png','jpeg');
                if(in_array($extension,$arr))
                {
                    if(saveUserdata($user_name,$user_email,$user_pass,$user_photo,$conn))
                    {
                            $_SESSION['user']=$user_name;
                            header('location:index.php');
                    }else
                    {
                            header('location:register.html');
                    }
                }
                else
                {
                echo "invaild photo";
                }
            }
            else
            {
            echo "invaild email";
            }
        }
        else
        {
            echo "invaild password";
        }
    }
    else
    {
        echo "invaild name";
    }


?>