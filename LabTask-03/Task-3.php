<?php
    function evenodd($num){
    if($num%2==0){
        echo "The number ".$num." is even";
    }
    else{
        echo "The number ".$num." is odd";
    }
}

$n1=32;
$n2=35;

echo "Given number: ".$n1."<br>";
evenodd($n1);

echo "<br>";

echo "Given number: ".$n2."<br>";
evenodd($n2);

?>