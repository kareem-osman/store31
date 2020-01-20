<?php
$rel_sql='SELECT category.id AS id,category.name AS cat_name ,category.describtion AS describtion , product.id AS prod_id ,product.name AS prod_name FROM `category` JOIN product 
ON category.id=product.cat_id
WHERE category.id='.$cat_id;
$rel_result=$conn->query($rel_sql);