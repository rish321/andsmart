<?php

$value = json_decode(stripslashes($_POST["json_obj"]), true);

//$value = json_decode(stripslashes($_POST), true);

print  "my name is ".$value["name"];


?>

