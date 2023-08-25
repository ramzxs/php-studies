<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Process</title>
</head>
<body>
    <h1>FORM - PROCESS</h1>

    <?php
    if (isset($_GET['kwd'])) {
        ?>
        <table border="1">
            <tr>
                <td width="100">KWD</td>
                <td width="100" style="text-align: right;">
                    <b><?php echo number_format($_GET['kwd'], 3); ?></b>
                </td>
            </tr>
            <tr>
                <td>
                    <b><?= $_GET['currencyTo'] ?></b>
                </td>
                <td style="text-align: right;">
                    <b><?php
                    if ($_GET['currencyTo'] == 'PHP') {
                        $result = $_GET['kwd'] * 183.64;
                    } else {
                        // USD
                        $result = $_GET['kwd'] * 3.24;
                    }
                    echo number_format($result, 3);
                    ?></b>
                </td>
            </tr>
        </table>
        <?php
    } else {
        ?>
        <a href="forex.php">Use the Forex Form</a>
        <?php
    } ?>
</body>
</html>