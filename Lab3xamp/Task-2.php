<?php
    function vat($a){
        echo "Given amount: ".$a."<br>";
        return 0.15*$a;
    }

    echo "VAT over the given amount(15%) : ".vat(100000);

?>