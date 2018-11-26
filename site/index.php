<?php

$json = file_get_contents('http://api-service/api.php?request=products');
$obj = json_decode($json);

foreach ($obj as $product) {
    echo $product . " ";
}

?>