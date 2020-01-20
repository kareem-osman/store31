<?php
include '../../database/user-auth/checkadmin.php';
include '../../conn.php';
$cat_id=$_REQUEST['id'];
include '../../database/category/read.php';
include '../../database/category/related_item.php';
$oneResult=$result->fetch_assoc()
?>

<html>
    <head>

    </head>
    <body>

        cat id : <?= $oneResult['id'] ?> <br>
        cat name : <?= $oneResult['name'] ?> <br>
        cat description: <?= $oneResult['describtion'] ?> <br>
        <h3>Related Items:</h3>
        <hr>


        <?php
        for($i=0;$i<$rel_result->num_rows ; $i++)
        {
            $oneRes_item=$rel_result->fetch_assoc();
        ?>
            <span><?= $oneRes_item['cat_name']?></span>
            <br>
            <span><?= $oneRes_item['prod_name']?></span>
            <hr>
        <?php
        }
        ?>

    </body>
</html>