<?php

include './model/user.php';

$new = new User();
$new->Inserted($_POST);
?>
