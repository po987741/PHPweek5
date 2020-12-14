
<?php
    echo "1.Condition Assigment Operators<br>";
    $status = (epmty($user)) ? "anonymous" : "logged in";
    echo $status;

    $user = "Mark";
    $status =(empty($user)) ? "anonymous" : "logged in";
    echo $status."<br>";
?>

<?php
    echo "2.Null coalescing Assigment Operators<br>";
    $user =$_GET("user") ?? "anonymous";
    echo $user."<br>";

   $color = $color ?? "red";
   echo "";
?>