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
    try {
        $CON = new PDO("mysql:hostname=localhost;dbname=myapp_db", 'root', '');
        $stmt = $CON->query("SELECT * FROM `user`;");
        while ($row = $stmt->fetch()) {
            echo $row['userID'] . ' = ' . $row['userPassword'];
            echo "<hr>";
        }
    } catch(Exception $ex) {
        echo "ERROR";
    }
    ?>
</body>
</html>