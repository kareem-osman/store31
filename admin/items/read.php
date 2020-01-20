<!DOCTYPE html>
<?php
$it_id=$_REQUEST['id'];
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
include '../../database/category/read.php';
$oneResult=$result->fetch_assoc()
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item Details</title>
</head>
<body>
 <div class="hju" style="text-align: center;width: 200px">
 <h2>Item Details</h2>
    <hr>
    <span>Id</span>
    <h3><?= $oneResult['id'] ?></h3>
    <hr>
    <span>Category Id</span>
    <h3><?= $oneResult['cat_id'] ?></h3>
    <hr>
    <span>Item name</span>
    <h3><?= $oneResult['name'] ?></h3>
    <hr>
    <span>Price</span>
    <h3>$<?= $oneResult['price'] ?></h3>
    <hr>
    <span>Describtion</span>
    <h3><?= $oneResult['describ'] ?></h3>
    <hr>
    <span>Brand Name</span>
    <h3><?= $oneResult['brand'] ?></h3>
    <hr>
    <button><a href="index.php">Back To Item Index</a></button>
 </div>
    
</body>
</html>