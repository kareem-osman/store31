<!DOCTYPE html>
<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$itemSql="select * from product";
$result=$conn->query($itemSql);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>items control</title>
</head>
<body>
    <h2 style="text-align: center">Item Control</h2>
    <table border="1"  style="text-align: center">
        <tr>
            <th>id</th>
            <th  style="width: 120px">Item Name</th>
            <th>Category Id</th>
            <th>Price</th>
            <th>Describation</th>
            <th>photo</th>
            <th>Brand</th>
            <th  style="width: 120px">Actions</th>
        </tr>
        <?php
        // foreach($items as $key => $val_it)
        for($i=0;$i<$result->num_rows;$i++)

        {
            $oneResult=$result->fetch_assoc()
            ?>
        <tr >
            <td><?=$oneResult['id']?></td>
            <td><?=$oneResult['name']?></td>
            <td><?=$oneResult['cat_id']?></td>
            <td>$<?=$oneResult['price']?></td>
            <td><?=$oneResult['describ']?></td>
            <td><?=$oneResult['photo']?></td>
            <td><?=$oneResult['brand']?></td>
            <td>
                <a href="read.php?id=<?=$oneResult['id']?>">R</a>
                <a href='delete.php?id=<?=$oneResult['id']?>'>D</a>
                <a href="update.php?id=<?=$oneResult['id']?>">U</a>
            </td>
            
        </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <hr>
    <button><a href="form.php">Add New Item</a></button>
    <button><a href="../../logout.php">log out</a></button>
    <br>
        <br>
        <hr>
        <h2 style="text-align: center"><a href="../category/index.php" >Go to Category Control</a></h2>
</body>
</html>