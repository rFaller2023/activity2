<?php

include './model/user.php';
$user_model = new User();
$data = $user_model->Search($_GET);
echo json_encode($data);

?>