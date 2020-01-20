<!DOCTYPE html>
<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$it_id=$_REQUEST['id'];
$itemSql="select * from product where id='$it_id'";
$result=$conn->query($itemSql);
$oneResult=$result->fetch_assoc()

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Item</title>
</head>
<body>
    <h2>Update Item</h2>
<br>
<br>
<form action="saveupdate.php" method="post">
    <input type="text" name="id" value="<?= $oneResult['id']?>">
    <label for="">Item Name</label>
    <input type="text" name="name" value="<?= $oneResult['name'] ?>">
    <br>
    <br>
    <label for="">Price</label>
    <input type="text" name="price" value="<?= $oneResult['price'] ?>">
    <br>
    <br>
    <label for="">Category Id</label>
    <input type="text" name="catID" value="<?= $oneResult['cat_id'] ?>">
    <br>
    <br>
    <label for="">Item Descrabtion</label>
    <input type="text" name="desc" value="<?= $oneResult['describ'] ?>">
    <br>
    <br>
    <label for="">Item Brand Name</label>
    <input type="text" name="brand" value="<?= $oneResult['brand'] ?>">
    <br>
    <br>
    <label for="">Item Photo</label>
    <input type="text" name="photo" value="<?= $oneResult['photo'] ?>">
    <br>
    <br>
    <input type="submit" value="Update">
</form>
    
</body>
</html>