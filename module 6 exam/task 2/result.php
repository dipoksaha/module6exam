<?php

function result($subject1 = 0, $subject2 = 0, $subject3 = 0, $subject4 = 0, $subject5 = 0)
{
    $total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $avg = $total / 5;







    $pass = "";
    switch (true) {

        case ($subject1 < 0 || $subject1 > 100
        || $subject2 < 0 || $subject2 > 100
        || $subject3 < 0 || $subject3 > 100
        || $subject4 < 0 || $subject4 > 100
        || $subject5 < 0 || $subject5 > 100);
            $pass = "invalid";
            break;


        case ($subject1 < 33
        || $subject2 < 33
        || $subject3 < 33
        || $subject4 < 33
        || $subject5 < 33)
        ;
            $pass = "Fail";
            break;


        default:

            $pass = "Pass";
            break;
    }



    $gradePoint = "";
    switch (true) {

        case ($avg >= 80 && $avg <= 100):
            $gradePoint = "A+";
            break;
        case ($avg >= 70 && $avg <= 79):
            $gradePoint = " A";
            break;
        case ($avg >= 60 && $avg <= 69):
            $gradePoint = " A-";
            break;
        case ($avg >= 50 && $avg <= 59):
            $gradePoint = " B";
            break;
        case ($avg >= 40 && $avg <= 49):
            $gradePoint = " C";
            break;
        case ($avg >= 33 && $avg <= 40):
            $gradePoint = " D";
            break;
        case ($avg >= 0 && $avg <= 32):
            $gradePoint = " F";
            break;
        default:
            $gradePoint = "Fail";
            break;

    }

    if ($pass == "invalid") {
        echo "Mark range invalid";
    } else if ($pass == "Fail") {
        echo "fail";
    } else {
        echo "total marks: " . $total;
        echo "<br>";
        echo "avg marks: " . $avg . "<br>";
        echo "Grade:" . $gradePoint;
    }


}

result(100, 80, 60, 80, 50);






?>
