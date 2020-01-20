<html>
<?php
include '../../database/user-auth/checkadmin.php';
?>
    <head>

    </head>
    <body>
        
        Add new Category
        <form method="POST" action="save.php">
            Category Name: <input type="text" name="cat_name"> <br>
            Category Desecrabtion: <input type="text" name="cat_desc"> <br>
            <input type="submit">
        </form>
    </body>
</html>