<?php
header("Content-Type", "application/x-www-form-urlencoded");

$name=$_POST["name"];
$email=$_POST["email"];
$greeting="Welcome at AIUB";

$data=["name"=>$name, "email"=>$email, "greeting"=>$greeting];
$jsonObj=json_encode($data);
echo $jsonObj;



?>