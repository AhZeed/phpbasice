<?php

$t = date("H");
if ($t < "16") {
    echo "Have a good afternoon";
    } elseif ($t < "20") {
     echo "Have a good day!";
    } else {
     echo "Have a good night!";
}
echo("<br>");
$money = 80;

if ($money >= 100) {
    echo "ซื้อหนังสือการ์ตูน.";
} else {
    echo "ซื้อขนม.";
}
echo("<br>");
$score = 79;

if ($score >= 80) {
    echo "Your grade is 4.";    
} else if ($score >= 70) {
    echo "Your grade is 3.";    
} else if ($score >= 60) {
    echo "Your grade is 2.";    
} else if ($score >= 50) {
    echo "Your grade is 1.";    
} else {
    echo "Sorry, you got grade 0."; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variblework</title>
</head>
<body>
    
</body>
</html>