<?php
/*
Create a PHP program to calculate the student result based on the marks obtained in five subjects.
 */

function gradeOnAverage( int $subject1, int $subject2, int $subject3, int $subject4, int $subject5 ) {

    // Check if All Input Marks are Valid or Not
    switch ( true ) {
    case ( $subject1 < 0 || $subject1 > 100 ):
    case ( $subject2 < 0 || $subject2 > 100 ):
    case ( $subject3 < 0 || $subject3 > 100 ):
    case ( $subject4 < 0 || $subject4 > 100 ):
    case ( $subject5 < 0 || $subject5 > 100 ):
        echo "Invalid Marks Range. Marks Must be Between 0 and 100. \n";
        return;
    }

    // Check if Any Subject has Bellow 33
    switch ( true ) {
    case ( $subject1 < 33 || $subject2 < 33 || $subject3 < 33 || $subject4 < 33 || $subject5 < 33 ):
        echo "You have Failed. Your Grade is F \n";
        return;
    }

    // Calculating Total and Average
    $total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $average = $total / 5;

    // Finding Grading System
    switch ( true ) {
    case ( $average >= 80 ):
        $grade = "A+";
        break;
    case ( $average >= 70 ):
        $grade = "A";
        break;
    case ( $average >= 60 ):
        $grade = "A-";
        break;
    case ( $average >= 50 ):
        $grade = "B";
        break;
    case ( $average >= 40 ):
        $grade = "C";
        break;
    case ( $average >= 33 ):
        $grade = "D";
        break;
    }

    // If All are Fine Echo the Result
    echo "Total Marks: {$total} \n";
    echo "Average Marks: {$average} \n";
    echo "Grade: {$grade} \n";
}

// Calling The Function with Arguments
gradeOnAverage( 33, 85, 89, 90, 91 );
