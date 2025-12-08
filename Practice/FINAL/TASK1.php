<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
    <h1>My First PHp Page</h1>
    <h2>Welcome to PHP programming</h2>
    

<?php
    echo "Hello, World!";
    $x=5;
    $y=10;
    $z=$x+$y;
    for($i=1; $i<=5; $i++){
        echo "<br>Iteration number: ".$i;
    }
    $colors = array("Red", "Green", "Blue");
    foreach($colors as $value){
        echo "<br>Color: ".$value;
    }
    if($z > 10){
        echo "<br>".$z." is greater than 10";
    } else {
        echo "<br>".$z." is not greater than 10";
    }
    switch($x){
        case 1:
            echo "<br>x is 1";
            break;
        case 5:
            echo "<br>x is 5";
            break;
        default:
            echo "<br>x is neither 1 nor 5";
    }
?>
</body>
</html>