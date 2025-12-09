<?php

    $num=10;
    $name="meow";
    echo $num."<br>";
    print($num);
    echo "<br>";
    echo $name," ",$num,"<br>";

    $x=print($name);
    echo $x."<br>";


    echo ($x);

    $dblVariable=10.2;
    $boolVariable=true;
    $nullVariable;

    echo "<br>";
    echo gettype($num);
    echo "<br>";
    echo gettype($name);
    echo "<br>";
    echo gettype($dblVariable);
    echo "<br>";
    echo gettype($boolVariable);
    echo "<br>";
    echo gettype($nullVariable);


    echo "<br>";
    echo var_dump($num);
    echo "<br>";
    echo var_dump($name);
    echo "<br>";
    echo var_dump($dblVariable);
    echo "<br>";
    echo var_dump($boolVariable);
    echo "<br>";
    echo var_dump($nullVariable);


    //ops

    $val1=10;
    $val2=20;

    echo "<br>";
    echo $val1+$val2;
    echo "<br>";
    echo $val1-$val2;
    echo "<br>";
    echo $val1*$val2;
    echo "<br>";
    echo $val1/$val2;
    echo "<br>";
    echo $val1**$val2;
    echo "<br>";
    echo $val1%$val2;
    echo "<br>";

    //flow control or condition

    if($val1>$val2)
    {
        echo $val1. "is greater";
    }

    else if($val1==$val2)
    {
        echo "both are equal";
    }

    else
    {
        echo $val2."is Greater";
    }


    echo "<br>";
    echo($val1>$val2)?$val1." is greater":$val2." is greater";

    $day=2;

    echo "<br>";
    switch($day)
    {
        case 1: echo "sunday";
                break;

        case 2: echo "monday";
                break;

        case 3: echo "tuesday";
                break;
        case 4: echo "wednesday";
                break;
        case 5: echo "thursday";
                break;
        case 6: echo "friday";
                break;
        case 7: echo "saturday";
                break;
        default: echo "invalid";
    }

    echo "<br>";

    for($i=1;$i<=5;$i++)
    {
        echo $i."<br>";
    }

    $k=6;

    while($k<=10)
    {
        echo $k."<br>";
        $k++;
    }

    $j=11;
    do
    {
        echo $j."<br>";
        $j++;
    }while($j<=15)








?>

