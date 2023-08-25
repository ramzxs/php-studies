<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date App</title>
</head>
<body>
    <h1>DATE APP</h1>

    <form action="?" method="get">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Date Today:</td>
                <td>
                    <input name="inputDate" type="date"
                            value="<?php echo (isset($_GET['inputDate'])) ? $_GET['inputDate'] : date('Y-m-d'); ?>">
                </td>
            </tr>
            <tr>
                <td>Number of Days to Add:</td>
                <td>
                    <input name="inputDays" type="number"
                            value="<?php echo (isset($_GET['inputDays'])) ? $_GET['inputDays'] : 1; ?>">
                </td>
            </tr>
            <?php
            if (isset($_GET['inputDate'])) { ?>
                <tr>
                    <td>Result:</td>
                    <td style="font-size: large; font-weight: bold;">
                        <?php
                        // Method 1
                        // $dateToday = new DateTime($_GET['inputDate']);
                        // $dateInterval = new DateInterval('P'.$_GET['inputDays']. 'D');
                        // $result = date_add($dateToday, $dateInterval);
                        // echo $result->format('Y-m-d');

                        // Method 2
                        // strtotime('+1 day 2023-08-25')
                        echo date('Y-m-d', strtotime('+'.$_GET['inputDays'].' day '.$_GET['inputDate']));
                        ?>
                    </td>
                </tr>
                <?php
            } ?>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Compute</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>