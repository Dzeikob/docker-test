<?php
  $requestType = $_GET["request"];

  if($requestType == "products") {
    $array = array("asi1", "asi2", "asi3");  
    echo json_encode($array);
  }
?>