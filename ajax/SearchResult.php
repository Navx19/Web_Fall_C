<?php
 $dictionary= ["a"=>"Apple", "b"=>"Ball", "c"=>"Cat"];

 $keyWord=$_GET["keyword"];

 if(isset($dictionary[$keyWord]))
 {
    echo $dictionary[$keyWord];
 }
 else
 {
    echo "no Suggestion";
 }

?>