<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$cat_name=$_REQUEST['cat_name'];
$cat_desc=$_REQUEST['cat_desc'];
$cat_id=$_REQUEST['cat_id'];

$mysql="UPDATE category 
SET id =$cat_id,name='$cat_name', describtion='$cat_desc' 
WHERE id=$cat_id";
$conn -> query($mysql);
header("location:index.php");
 ?>