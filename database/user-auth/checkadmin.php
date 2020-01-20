<?php
session_start();
if(isset($_SESSION['user']))
{
    if($_SESSION['is_admin']==1)
    {
        echo '<h2>hi: '. $_SESSION['user'].' </h2>';
    }
    else
    {
        header('location:../../index.php');
    }
}
else
{
    header('location:../../login.php');
}