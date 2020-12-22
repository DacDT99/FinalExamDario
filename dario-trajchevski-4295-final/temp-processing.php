<?php

if(isset($_POST['calculate'])){
    $temperature = $_POST['temperature'];
    $units = $_POST['units'];

    if($units == "C"){
        $result = $temperature * 9 / 5 + 32;
    } else {
        $result = ($temperature - 32) *5 / 9;
    }

    echo "The converted temperature is " . $result;
}