<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$cat_id=$_REQUEST['id'];
function deleteItemdata($cat_id,$conn)
{
    $mysql="delete from category where id='$cat_id'";
    $conn -> query($mysql);
}
deleteItemdata($cat_id,$conn);
header('Location: index.php');
