<?php
require_once("../model/user_model.php");
$name = $_REQUEST['name'];

$result = delete_user($name);

if($result){
    echo "delete succesfull";
}
else{
    echo "problem in deleting user";
}


?>