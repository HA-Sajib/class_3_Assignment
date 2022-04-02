<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class - 3</title>
</head>
<body>
 

 <!-- example - 3 -->
 <!-- Let’s make a result grade calculator…

Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.
Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 
From this given formula, you will get a mark. Show the Grade message by the mark.

A+ = 80 - 100 
A   = 70 - 79
A-  = 60 - 69
B   = 50 - 59
C   = 40 - 49
F   = 01 - 39 
    Firstly you have to calculate the average mark of Rishita.

    Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range. -->

<h1>Question - 1</h1>
 <?php

$SubjectA = "70";
$SubjectB = "80";
$SubjectC = "55";
$SubjectD = "90";

// total number
 $total_number = $SubjectA + $SubjectB + $SubjectC + $SubjectD;
 echo "Rishita’s Total Subject Number is : ".$total_number;
 echo "<br>";
 echo "<br>";
//  Average Number
 $avarage_mark = $total_number / 4;
 echo "Rishita’s average mark is : ".$avarage_mark;

 echo "<br>";
 echo "<br>";

// calculate the average mark of Rishita

if( $SubjectA < 40 or $SubjectB < 40 or $SubjectC < 40 or $SubjectD < 40   ){
    echo "You got : Fail";
 } else if( $SubjectA > 100 or $SubjectB > 100 or $SubjectC > 100 or $SubjectD > 100   ){
    echo "Mark not found";
 } else if( $avarage_mark >= "80" && $avarage_mark <= "100" ){
     echo "You got : A+";
 } else if( $avarage_mark >= "70" && $avarage_mark <= "79" ){
    echo "You got : A";
 } else if( $avarage_mark >= "60" && $avarage_mark <= "69" ){
    echo "You got : A-";
 } else if( $avarage_mark >= "50" && $avarage_mark <= "59" ){
    echo "You got : B";
 } else if( $avarage_mark >= "40" && $avarage_mark <= "49" ){
    echo "You got : C";
 }else{
     echo "You got : Fail";
 }

 ?>
<br>
<br>
<br>
<br>
<hr>
<h1>Question - 2</h1>
<!-- Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

When you click on the power/start button, your bike takes a start,
When you click stop, your bike takes a stop, 
When you press the break, your bike take break, 
when you give the gear, your bike move faster and faster, 
when you press the signal button, your bike shows a signal light.
When you press the headlight button, your bike’s headlight will start -->

<?php

$bike = "gear";

switch($bike){
    case "start";
    echo "My bike takes a start";
    break;

    case "stop";
    echo "My bike takes a stop";
    break;

    case "break";
    echo "My bike take break";
    break;

    case "gear";
    echo "My bike move faster and faster";
    break;

    case "signal";
    echo "My bike shows a signal light";
    break;

    case "headlight";
    echo " headlight will start";
    break;

    default:
    echo "bike take Rest";
    break;
}

?>

</body>
</html>



    <!-- 1. git clone linkkkk
    2. git status
    3. git add . 
    {sob gula file upload korar jonno- git add .
    and ekta file upload korar jonno- git add file name
    }
    4. git commit -m "as like as comment {date}"
    5. git push
    ## same folder ee file upload :

    1.  -->

