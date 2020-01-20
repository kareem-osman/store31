<?php

include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$it_catid=$_REQUEST['catID'];
$it_name=$_REQUEST['name'];
$it_price=$_REQUEST['price'];
$it_desc=$_REQUEST['desc'];
$it_brand=$_REQUEST['brand'];
$it_photo=$_FILES['photo']['name'];

function saveItemdata($name,$price,$desc,$photo,$brand,$catid,$conn)
{
$mysql="insert into product values(null,'$name','$desc','$price','$photo','$brand','$catid')";
$conn -> query($mysql);
echo"save";
}

saveItemdata($it_name,$it_price,$it_desc,$it_photo,$it_brand,$it_catid,$conn);

header("location:index.php");
?>