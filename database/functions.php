<?php
  function filterItems($catId, $items)
  {
    $workingItems = [];
    // create new items array
    foreach($items as $itemKey => $itemVal)
    {
      if($catId == $itemVal['catID'])
      {
        $workingItems[$itemKey] = $itemVal;
      }
    }
    return $workingItems;
  }