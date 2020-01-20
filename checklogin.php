<?php
session_start();
include "database/conn.php";
$user_email=$_REQUEST['user_email']; 
$user_pass=md5($_REQUEST['user_pass']); 
$mysql="select * from user";
$result=$conn->query($mysql);
for ($i=0 ; $i<$result->num_rows;$i++)
{
    $user_one=$result->fetch_assoc();
    if($user_one['mail']==$user_email && $user_one['pass']==$user_pass)
    {
        $_SESSION['user']=$user_one['name'];
        $_SESSION['is_admin']=$user_one['is_admin'];
        if($user_one['is_admin']==1)
            {
                header('Location: admin\items\index.php');
                
            }
        else
            {
                header('Location: index.php');
            }
    } 
}
echo 'This is email not registration ' .
' <br><a href="register.html">Sign in Naw</a> <br> or <br> <a href="login.php">Try to Login</a> ' ;
