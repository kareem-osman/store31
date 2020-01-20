<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$it_name=$_REQUEST['name'];
$it_price=$_REQUEST['price'];
$it_desc=$_REQUEST['desc'];
$it_brand=$_REQUEST['brand'];
$it_photo=$_REQUEST['photo'];
$it_catid=$_REQUEST['catID'];
$it_id=$_REQUEST['id'];

$mysql="UPDATE product 
SET id =$it_id,name='$it_name', describ='$it_desc', price=$it_price, photo ='$it_photo', brand='$it_brand', cat_id =$it_catid 
WHERE id=$it_id";
$conn -> query($mysql);
header("location:index.php");
 ?>