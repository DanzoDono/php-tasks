<!DOCTYPE html>
<html>
<head>
    <title>Salary Calculator</title>
</head>
<body>

<h2>Salary Calculator</h2>

<form action="" method="post">

    <label>Hourly Pay ($):</label><br>
    <input type="number" name="hourly_pay"><br><br>

    <label>Hours Worked Per Week:</label><br>
    <input type="number" name="hours"><br><br>

    <button type="submit">Calculate</button>

</form>

<?php

if (isset($_POST["hourly_pay"], $_POST["hours"])) {

    $hourly_pay = $_POST["hourly_pay"];
    $hours = $_POST["hours"];

    $weekly_pay = $hourly_pay * $hours;
    $monthly_pay = $weekly_pay * 4;
    $yearly_pay = $weekly_pay * 52;

    echo "<hr>";
    echo "Weekly Pay: $" . $weekly_pay . "<br>";
    echo "Monthly Pay: $" . $monthly_pay . "<br>";
    echo "Yearly Pay: $" . $yearly_pay . "<br>";
    
    if($weekly_pay >= 700){
        echo "your fine";
    }else{
        echo "your poor";
    }
}

?>

</body>
</html>