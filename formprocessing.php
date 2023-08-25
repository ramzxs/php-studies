<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>
<body>
    <h1>PHP STUDIES</h1>
    <a href=".">Home</a> | <a href="formprocessing.php">Form Processing</a>
    <hr>

    <h1>FORM PROCESSING</h1>

    <h2>USER LOGIN</h2>

    <?php
    // Key - Value Pairs
    // $_REQUEST[], $_GET[], $_POST[]
    if ( isset($_REQUEST['user']) ) {
        // DATABASE RECORDS
        if ( $_REQUEST['user'] == 'root' && $_REQUEST['password'] == 'root' ) {
            ?>
            <div style="color: green;">Welcome, Super User!</div>
            <br>
            <?php
        } else {
            ?>
            <div style="color: red;">Invalid username and/or password.</div>
            <br>
            <?php
        }
    }
    ?>

    <form action="?" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td>
                    <input type="text" name="user" required>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>