<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$cat_id=$_REQUEST['id'];
$catSql="select * from category where id='$cat_id'";
$result=$conn->query($catSql);
$oneResult=$result->fetch_assoc()
?>

<html>
    <head></head>
    <body>
        Update Category
        <form method='POST' action="saveUpdate.php">
            <input type="text" name='cat_id' value='<?=$oneResult['id'] ?>'>
            category name: <input type="text" name='cat_name' value='<?=$oneResult['name']?>'><br>
            category desc: <input type="text" name='cat_desc' value='<?=$oneResult['describtion']?>'><br>
            <input type="submit" value="Update">
        </form>
    </body>
</html>

