<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$it_id=$_REQUEST['id'];
function deleteItemdata($it_id,$conn)
{
    $mysql="delete from product where id='$it_id'";
    $conn -> query($mysql);
}
deleteItemdata($it_id,$conn);
header('Location: index.php');