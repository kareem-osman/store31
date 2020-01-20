<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$catName = $_REQUEST['cat_name'];
$catdesc= $_REQUEST['cat_desc'];
function saveItemdata($name,$desc,$conn)
{
$mysql="insert into category values(null,'$name','$desc')";
$conn -> query($mysql);
}
saveItemdata($catName,$catdesc,$conn);
header("location:index.php");