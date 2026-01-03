<?php


    $assocArray=["name"=>"Mr. Meow", "pass_No"=>"BN099089"];
    $jsonObj=json_encode($assocArray);

    echo $jsonObj;

    $phpObj=json_decode($jsonObj);
    echo "<br>".$phpObj->name;
    echo "<br>".$phpObj->pass_No;


?>