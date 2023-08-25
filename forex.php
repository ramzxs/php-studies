<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forex</title>
</head>
<body>
    <h1>FOREX</h1>

    <form action="forex_process.php" method="get">
        <table>
            <tr>
                <td>Kuwait Dinar (KWD):</td>
                <td>
                    <input name="kwd" type="number" step="0.100" required>
                </td>
            </tr>
            <tr>
                <td>Convert to:</td>
                <td>
                    <select name="currencyTo" required>
                        <option value="">--- Select ---</option>
                        <option value="PHP">Philippine Peso (PHP)</option>
                        <option value="USD">United States Dollar (USD)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Convert</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>