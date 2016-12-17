<?php $arr=$_SESSION['cart'];
foreach($arr as $item) {
    echo $item['name'] . '--' . $item['price'] . '--' . $item['author'];
}
?>
