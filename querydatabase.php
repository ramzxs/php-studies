<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Database</title>
</head>
<body>
    <h1>Query Database</h1>
    <?php
    $CON = new PDO("mysql:hostname=localhost;dbname=myapp_db", 'root', '');
    $stmt = $CON->query("SELECT * FROM `user`;");
    while ( $row = $stmt->fetch() ) {
        echo $row['userID'] . ' = ' . $row['userPassword'];
        echo "<hr>";
    }
    ?>


    <h2>Insert Example</h2>

    <input type="text" placeholder="Username"><br>
    <input type="password">

    <?php

    $sqlInsert = "INSERT INTO `user`
        VALUES('student', PASSWORD('learner'))";
    $CON->exec($sqlInsert);
    echo "User account created";
    ?>
</body>
</html>

<?php
/*
echo "<hr><hr>";

$loginSQL = "SELECT * FROM `user`
     WHERE `userID` = 'ramzxs'
     AND `userPassword` = PASSWORD('Phoenix15')";
$stmt = $CON->query($loginSQL);
if ($row = $stmt->fetch()) {
    echo "Login successful";
} else {
    echo "Login failed";
}
*/