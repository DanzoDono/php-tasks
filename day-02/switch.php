<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>switch</h1>
    <form action="switch.php" method="post">
        <label for="text">Enter your Color Please :</label> <br>
        <input type="text" name="color"><br><br>
        <button type="submit">Enter </button>
    </form>
</body>
</html><?php

$day = "Monday";

switch ($day) {

    case "Monday":
        echo "Today is Monday". "<br>";
        break;

    case "Tuesday":
        echo "Today is Tuesday";
        break;

    case "Wednesday":
        echo "Today is Wednesday";
        break;

    default:
        echo "Unknown day" . "<br>";
}

$month = "January";

switch($month ){
    case "January":
        echo "Happy New Year" ." <br>";
        break;
    case "Fevrier":
        echo "Happy New Year 2"." <br>";
}


if(isset($_POST['color'])){

 $color = $_POST["color"];

    switch($color){
        case "red":
            echo "red";
            break;
        case "green":
            echo "green";
            break;
        case "blue":
            echo "blue";
            break;
        default:
        echo "color invalid";
    }
}
?>


