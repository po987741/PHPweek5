
<?php
    echo "1.The if  Statement<br>";
    $t = data("H");
    echo $t."<br>";
    if($t < "20"){
        echo "Have a good day!";
    }
?>

<?php
    echo "2.The if else  Statement<br>";
    $t = data("H");
    echo $t."<br>";
    if($t < "20"){
        echo "Have a good day!";
    }
    else{
        echo "have a good night!";
    }
?>

<?php
    echo "3.The else if  Statement<br>";
    $t = data("H");
    echo $t."<br>";
    if($t < "5"){
        echo "Have a good Morning!";
    }
    else if($t < "10"){
        echo "Have a good day!";
    }
    else{
        echo "have a good night!";
    }
?>

<?php
    echo "<br>4.THe Switch Statement<br> ";
    $favColor =  "red";
    switch($favColor){
        case "red":
        echo "Your favoraite color is $favColor";
        case "blue":
        echo "Your favoraite color is $favColor";
        break;
    default:
        echo "Your favorite color is ??";
    }
?>