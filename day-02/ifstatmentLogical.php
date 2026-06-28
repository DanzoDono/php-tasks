<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>logocal opirators</h1>
    <form action="ifstatmentLogical.php" method="post">
        <label for="text">Username :</label> <br>
        <input type="text" name="username"> <br>
        <label for="text">Password :</label> <br>
        <input type="password" name="password"> <br>
        <button type="submit">Log in </button> <br>
        <hr>
    </form>

    <form action="ifstatmentLogical.php" method="post">
        <label for="text">Enter your Grade  :</label> <br>
        <input type="text" name="grade"> <br>
        <button type="submit">enter</button>
    </form>
</body>
</html>


<?php

// $age = 20;
// $salary = 5000;

// if($age >= 18 && $salary > 3000){
//     echo "Accepted" . "<br>";
// }

// $country = "Morocco";

// if($country == "Morocco"){
//     echo "welecom"."<br>";
// }

// $isAdmin = false;


// if(!$isAdmin){
//     echo "Acess Denies" . "<br>";
// }


// if (isset($_POST["username"],$_POST["password"])){
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     if($username == "admin" && $password == "1234"){
//         echo "Login Successfuly";
//     }else{
//         echo "Invalid Username or Password";
//     }
// }
$grade = $_POST["grade"];

if($grade == "A"){
    echo "You did great";

}elseif($grade == "B"){
    echo "You did good";
}elseif($grade == "C"){
    echo "You did okay";
}elseif($grade == "D"){
    echo "You did poorly";

}elseif($grade == "E"){
    echo "You did failed";
}else{
    echo "{$grade} is not valid grade";
}


?>