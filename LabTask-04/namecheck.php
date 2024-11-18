<?php
    session_start();

    if(isset($_POST['submit'])){

        $name  =  $_REQUEST['name'];

        if($name == null){
            echo "Null data found!";
        }
        else if(str_word_count()<2){
            echo "atleast 2 words required";
        }
        else if(name[0]){
            echo "must start with a letter";
        }
        else if(){
            echo "can contain a-z, A-Z, period, dash only";
        }
        
        else{
            echo "Submitted";
        }
    }else{
        //echo "Invalid request!";
        header('location: name.html');
    }

?>