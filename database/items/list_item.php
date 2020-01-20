<?php
$sql='select * from product where cat_id='.$catId;  
$itemsResult = $conn -> query($sql);