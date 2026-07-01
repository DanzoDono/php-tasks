<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>While && For  loops </h1>
</body>
</html>

<?php
// ex 1 :for اطبع الأرقام من 1 إلى 10 باستخدام 
// for($i=1;$i<=10;$i++){
//     echo $i . "<br> <br>";
// }

// ex2 : اطبع الأرقام من 10 إلى 1.
// for ($a = 10; $a >= 1; $a--) {
//     echo $a . "<br>";
// }
// ex3 : احسب مجموع الأرقام من 1 إلى 100
// $sum =0;
// for ($b = 1; $b <= 100; $b++) {
//     $sum+= $b;
// }
// echo $sum . "<br>";

// ex3.3: بدون أن تبحث عن الحل، اكتب حلقة تطبع
//  for($i=2;$i<=100;$i+=2){  
//      echo $i . "<br>";
// }
// // ex4: اطبع جدول ضرب العدد 8
// for($i=1;$i<=10;$i++){ 
//     echo "8 x $i =" . (8*$i) . "<br>";
// }
// ex5 : اطبع هذا الشكل:
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br> <br>";

// for($i=5;$i<=5;$i--){
//     for($j=1;$j<=$i;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }

for($i=5;$i<=5;$i++){
    for($j=1;$j<=5 - $i ;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k= 1 ; $k <= $i ;$k++){
        echo "*";
    }
    echo "<br>";
}
?>