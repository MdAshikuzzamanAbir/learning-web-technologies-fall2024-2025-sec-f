<?php
require_once("../model/user_model.php");
$old_username = $_REQUEST['old_name'];
$new_username = $_REQUEST['new_username'];
$new_password = $_REQUEST['new_password'];
$new_email = $_REQUEST['new_email'];
$new_age = $_REQUEST['new_age'];

$result = change_user($old_username, $new_username, $new_password, $new_email, $new_age);
if($result == true){
    echo "edit success";
}
else{
    echo "failed to edit user";
}


?>