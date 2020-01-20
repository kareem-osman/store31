<!DOCTYPE html>
<?php
include '../../database/user-auth/checkadmin.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Item</title>
</head>
<body>
    <h2>Add New Item</h2>
<br>
<br>
<form action="save.php" method="post" enctype="multipart/form-data">
    <label for="">Item Name</label>
    <input type="text" name="name">
    <br>
    <br>
    <label for="">Price</label>
    <input type="text" name="price">
    <br>
    <br>
    <label for="">Category Id</label>
    <input type="text" name="catID">
    <br>
    <br>
    <label for="">Item Descrabtion</label>
    <input type="text" name="desc">
    <br>
    <br>
    <label for="">Item brand</label>
    <input type="text" name="brand">
    <br>
    <br>
    <label for="">Item photo</label>
    <input type="file" name="photo">
    <br>
    <br>
    <input type="submit" value="ADD">
</form>
    
</body>
</html>