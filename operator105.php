
<?php
    echo "<br>And Operator<br>";
    $x = 100;
    $y = 50;
    if($x == 100 and $y == 50){
        echo "Hello World";
    }
?>
<?php
    echo "<br>And Operator<br>";
    $x = 100;
    $y = 50;
    if($x == 100 && $y == 50){
        echo "True";
    }
?>
<?php
    echo "<br>And Operator<br>";
    $x = 100;
    $y = 50;
    if($x == 100 or $y == 50){
        echo "True";
    }
    else{
        echo "False";
    }
?>
<?php
    echo "<br>Or Operator<br>";
    $x = 100;
    $y = 50;
    if($x == 100 or $y == 50){
        echo "True";
    }
?>
<?php
    echo "<br>Or Operator<br>";
    $x = 100;
    $y = 50;
    if($x == 100 or $y == 50){
        echo "True";
    }
?>
<?php
    echo "<br>Not Operator<br>";
    $x = 100;
    if($x !== 100 ){
        echo "True";
    }
    else{
        echo "False";
    }
?>