
<?php
    echo "Identical Comparison Operators <br>";
    $x = 10;
    $y = "10";
    var_dump($x === $y);
?>

<?php
    echo "<br>Spaceship Comarison Operators<br>";
    $x = 10;
    $y = "10";
    var_dump($x <=> $y);
?>

<?php 
    echo "<br>Spaceship Comarison Operators<br>";
    $x = 10;
    $y = 10;
    var_dump($x <=> $y);
?>

<?php 
    echo "<br>Spaceship Comarison Operators<br>";
    $x = 10;
    $y = 10;
    var_dump($x <=> $y);
?>

<?php 
    echo "<br>Spaceship Comarison Operators<br>";
    $x = 15;
    $y = 10;
    var_dump($x <=> $y);
?>