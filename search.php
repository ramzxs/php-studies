<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <h1>SEARCH</h1>

    <form action="?" method="post">
        <input name="searchQuery" type="search" width="100" required value="<?php
        // Tertiary Operator ?:
        echo (isset($_POST['searchQuery'])) ? $_POST['searchQuery'] : "";
        ?>">
        <button type="submit">Search</button>
    </form>
    <br>

    <?php
    if (isset($_POST['searchQuery'])) { ?>

        <div>
            <h2>RESULTS</h2>

            Searching for "<?php echo $_POST['searchQuery']; ?>", please wait...<br><br>

            <table border="1" cellpadding="10" cellspacing="0">
                <?php
                // PHP - MySQL/MariaDB
                // mysql, mysqli, pdo (PHP Data Objects)
                try {
                    // Object Oriented Programming (OOP)
                    $DBCONN = new PDO('mysql:host=localhost;dbname=myapp_db', 'root', '');

                    // search A
                    // values: Apple, Banana
                    // A% = Apple
                    // %A% = Apple, Banana
                    // %A = Banana
                    $sql = "SELECT * FROM product
                        WHERE (
                            `name` LIKE '%" . $_POST['searchQuery'] . "%'
                            OR `desc` LIKE '%" . $_POST['searchQuery'] . "%'
                        )";
                    // echo $sql.'<br><br>';
                    $stmt = $DBCONN->query($sql);

                    $i = 1;
                    while ($row = $stmt->fetch()) { ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['desc'] ?></td>
                        </tr>
                        <?php
                    }
                } catch (PDOException $e) {
                    echo "ERROR<hr>" . $e->getMessage();
                }
                ?>
            </table>
        </div>

        <?php
    } ?>
</body>

</html>