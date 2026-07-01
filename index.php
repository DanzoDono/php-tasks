<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="text">Name :</label> <br>
        <input type="text" name="name"><br>
         <label for="text">Age :</label> <br>
        <input type="text" name="age"><br>
         <label for="text">City :</label> <br>
        <input type="text" name="city"><br> <br>
        <button type="submit">enter</button>
    </form>
    <hr>


    <form action="index.php" method="post">
        <label for="text">Enter Salalry</label> <br>
        <input type="text" name="salary"><br>
        <button type="submit">enter</button>
    </form>
</body>
</html>
<?php 
// task 1 complit
if(isset($_POST["name"],$_POST["age"],$_POST["city"])){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $city = $_POST["city"];

    echo "Name :{$name} "  . "<br>". "Age : {$age}"  . "<br>" .  "City : {$city} " . "<br>";

}

// tasks2 
if (isset($_POST["salary"])) {

        $salary = $_POST["salary"];

        $weekly_salary = $salary * 7;
        $monthly_salary = $weekly_salary * 4;
        $yearly_salary = $monthly_salary * 12;

        echo "Daily Salary : \$$salary <br><br>";

        echo "Weekly Salary : \$$weekly_salary <br>";
        echo "Monthly Salary : \$$monthly_salary <br>";
        echo "Yearly Salary : \$$yearly_salary <br>";
    }


?>
