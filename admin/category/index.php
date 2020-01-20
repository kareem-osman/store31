<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$catSql="select * from category";
$result=$conn->query($catSql);
?>

<html>
    <head>

    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Describtion</th>
                <th>Actions</th>
            </tr>
            <?php
        // foreach($items as $key => $val_it)
        for($i=0;$i<$result->num_rows;$i++)

        {
            $oneResult=$result->fetch_assoc()
            ?>
            <tr>
                <td><?= $oneResult['id'] ?></td>
                <td><?= $oneResult['name'] ?></td>
                <td><?= $oneResult['describtion'] ?></td>
                <td><a href="read.php?id=<?=$oneResult['id'] ?>">R</a>
                <a href="delete.php?id=<?=$oneResult['id'] ?>">D</a>
                <a href="update.php?id=<?=$oneResult['id'] ?>">U</a>
            </td>
            </tr>
            <?php } ?>
        </table>
        <hr>
        <hr>
        <button><a href="form.php">Add new Category</a></button>
        <button><a href="../../logout.php">Logout</a></button>
        <br>
        <br>
        <hr>
        <h2 style="text-align: center"><a href="../items/index.php">Go to Items Control</a></h2>
    </body>
</html>




