<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <style>
        /* CSS Comment */
        .alert {
            color: yellow;
            background-color: red;
        }

        .passed {
            color: yellow;
            background-color: green;
        }
    </style>
</head>
<body>
    <h1>PHP STUDIES</h1>
    <a href=".">Home</a> | <a href="formprocessing.php">Form Processing</a>
    <hr>

    <!-- HTML Comment -->
    <h1>PHP Basics</h1>

    <p>Double quote</p>
    <p>Single quote</p>

    <p>Contant / Fixed Content</p>

    <?php echo "<p>Constant</p>"; ?>

    <?php
    /*
    LEARNING A PROGRAMMING LANGUAGE TRACK

    BASIC - LANGUAGE
    1. Comment
    2. Display Output
    3. Variables & Operators
    4. Control Flow
    5. Looping
    6. Functions/Methods
    
    ADVANCED
    7. Data Structures - Arrays, Tree, Heap, Graph
    8. File Handling - Open file, write file, create directory, list files
    9. Databse Integration - MySQL Server connection,
            List records from table
            Insert, update and delete a record
    */
    
    // Single-line comment
    
    $var1 = 123;
    echo "My first variable now holds " . $var1 . "<br>";  // String concatenation
    ?>

    <h2>Area Calculator</h2>
    <?php
    // Identifier = Variable naems
    $l = 10.5; // form input
    $w  = 7.25;
    $area   = $l * $w;
    echo 'Length: ' . $l . '<br>';
    echo 'Width: ' . $w . '<br>';
    echo 'Area: <b>' . $area . '</b>';
    
    /* Is this a PHP comment? */
    ?>



    <h2>Temperature Calculator</h2>
    <?php
    $celsius = 55; // Hard-coded vs User Inputs
    $fahrenheit = ($celsius * (9 / 5)) + 32;
    ?>
    <table border="1">
        <tr>
            <td>Celsius:</td>
            <td width="100" align="right">
                <b><?php echo $celsius; ?> °C</b>
            </td>
        </tr>
        <tr>
            <td>Fahrenheit:</td>
            <td width="100" align="right">
                <b><?php echo $fahrenheit; ?> °F</b>
            </td>
        </tr>
    </table>


    <h2>Control Flow</h2>
    <?php
    /* == != <= >= */
    /* AND &&;;;   OR ||  */

    $grade = 44;
    echo "Grade = " . $grade . "<br>";
    echo "Grade Remark = ";
    $alert = false;
    /*
    GRADING SCALE
    100 - 75     = Good
    50 - 74      = Passing
    49 and Below = Failed    */
    if ($grade >= 75 && $grade <= 100) {  // 101
        echo "Good";
        $alert = false;
    } elseif ($grade >= 50 && $grade <= 74) {
        echo "Passing";
        $alert = false;
    } elseif ($grade >= 0 && $grade <= 49) {
        echo "Failed";
        $alert = true;
    } else {
        echo "Invalid Grade";
        $alert = true;
    }
    ?>
    
    <marquee
        class="<?php echo ($alert) ? 'alert' : 'passed' ?>"
        >ALERT!</marquee>

    <h2>Looping</h2>
    <?php echo 1; ?>
    <?php echo 2; ?>
    <?php echo 3; ?>
    <?php echo 4; ?>
    <?php echo 5; ?>
    <br>
    <?php
    // do, while, for
    for ($i = 1; $i <= 13; $i++) {  // initialization, checking, run, updating
        echo $i . ' ';
    }
    // 123...1415
    ?>

    <h2>Functions</h2>
    <?php
    function getDateToday() { // Function Definition/declaration 
        return date('Y-m-d H:i:s');
    }
    echo getDateToday() . '<br>'; // Function call


    // $var1
    // func
    function printCapitalized($str) {
        echo strtoupper($str);
    }

    printCapitalized("Juliet");
    ?>

    <h2>DATA STRUCTURES - Arrays</h2>
    <?php
    // Fixed Numbers
    $score1 = 10;
    $score2 = 15;
    $score3 = 16;
    $score4 = 12;
    $score5 = 17.5;
    $sum = $score1 + $score2 + $score3 + $score4 + $score5;
    $ave = $sum / 5;
    ?>
    Sum: <b><?php echo $sum; ?></b><br>
    Average: <b><?php echo $ave; ?></b><br>
    <hr>
    <?php
    // Using Array
    //           0   1   2   3     4
    $scores = [ 10, 15, 16, 12, 17.5, 14, 13 ];    
    $sum = 0;
    for ($i = 0; $i < count($scores); $i++) {
        // $sum = $sum + $scores[$i];
        $sum += $scores[$i];  // 0 + 10
    }
    $ave = $sum / count($scores);
    ?>
    Sum: <b><?php echo $sum; ?></b><br>
    Average: <b><?php echo $ave; ?></b><br>
</body>
</html>